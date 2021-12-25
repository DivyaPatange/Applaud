<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'image' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $img = $data['image'];
        $folderPath = "uploads/";

        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
      
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = uniqid() . '.png';
      
        $file = $folderPath . $fileName;
        
        // $path = Storage::disk('s3')->put($file, $image_base64);

        // if ($path) {
            $url = $this->getObjectUrl('uploads/61c714c5a80fc.png');
        // }
        // $url = "https://www.finetoshine.com/wp-content/uploads/Couple-dp-e1627125591152-wpp1627125644475.jpg";
        // dd($file);
        $enrollDetails = $this->enrollFace($url, $fileName);
  
        $output = json_decode($enrollDetails);
        dd($output);
        if (isset($output->face_id)) {
            $images = $output->images;
            if (count($images) > 1) {
                $this->removeGallery();
                Storage::disk('s3')->delete($file); 
                return redirect('/register')->with('danger', "Multiple Faced Detected");
            } else {
                $parameter = $output->images[0]->transaction;

                $user =  User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                    'filename' => $fileName,
                    'filepath' => $file,
                    'filesize' => Storage::disk('s3')->size($file),
                    'subject_id' => $parameter->subject_id,
                    'gallery_name' => $parameter->gallery_name,
                    'face_id' => $parameter->face_id,
                    'confidence' => $parameter->confidence,
                    'quality' => $parameter->quality,
                ]);
    
                return $user;
            }
        } elseif (isset($output->Errors)) {
            return redirect('/register')->with('danger', $output->Errors[0]->Message);
        }
    }

    public function getObjectUrl($filename) 
    {
        $disk = Storage::disk('s3');
        if ($disk->exists($filename)) {
            $command = $disk->getDriver()->getAdapter()->getClient()->getCommand('GetObject', [
                'Bucket'                     => config('filesystems.disks.s3.bucket'),
                'Key'                        => $filename,
                'ResponseContentDisposition' => 'attachment;'
            ]);
    
            $request = $disk->getDriver()->getAdapter()->getClient()->createPresignedRequest($command, '+5 minutes');
           
            return(string) $request->getUri();
        }
    }

    public function recognizeFace($url, $fileName)
    {
        // set variables
        $queryUrl = "http://api.kairos.com/recognize";
        $imageObject = '{
            "image": '.$url.',
            "gallery_name": "VikGallery5"
        }';
        // dd($imageObject);
        $APP_ID = env('KAIROS_APP_ID');
        $APP_KEY = env('KAIROS_SECRET_KEY');

        $request = curl_init($queryUrl);

        // set curl options
        curl_setopt($request, CURLOPT_POST, true);
        curl_setopt($request,CURLOPT_POSTFIELDS, $imageObject);
        curl_setopt($request, CURLOPT_HTTPHEADER, array(
                "Content-type: application/json",
                "app_id:" . $APP_ID,
                "app_key:" . $APP_KEY
            )
        );

        curl_setopt($request, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($request);
        dd($response);
        // show the API response
        echo $response;

        // close the session
        curl_close($request);
 
    }

    public function viewGallery()
    {
        $queryUrl = "http://api.kairos.com/gallery/view";
        $imageObject = '{"gallery_name": "VikGallery5"}';
        $APP_ID = env('KAIROS_APP_ID');
        $APP_KEY = env('KAIROS_SECRET_KEY');

        $request = curl_init($queryUrl);
        // dd($APP_ID);
        // set curl options
        curl_setopt($request, CURLOPT_POST, true);
        curl_setopt($request,CURLOPT_POSTFIELDS, $imageObject);
        curl_setopt($request, CURLOPT_HTTPHEADER, array(
                "Content-type: application/json",
                "app_id:" . $APP_ID,
                "app_key:" . $APP_KEY
            )
        );

        curl_setopt($request, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($request);
        dd($response);
        // show the API response
        echo $response;

        // close the session
        curl_close($request);
    }

    public function enrollFace($url, $fileName)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api.kairos.com/enroll");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        $APP_ID = env('KAIROS_APP_ID');
        $APP_KEY = env('KAIROS_SECRET_KEY');
        curl_setopt($ch, CURLOPT_POST, TRUE);
        
        $arr = json_encode(array("image"=> $url, "subject_id" => "vikash5", "gallery_name" => "VikGallery5"));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "app_id:" . $APP_ID,
                "app_key:" . $APP_KEY
        ));

        $response = curl_exec($ch);
        curl_close($ch); 
        return $response;
    }

    public function removeGallery()
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api.kairos.com/gallery/remove");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        $APP_ID = env('KAIROS_APP_ID');
        $APP_KEY = env('KAIROS_SECRET_KEY');
        curl_setopt($ch, CURLOPT_POST, TRUE);
        
        $arr = json_encode(array("gallery_name" => "VikGallery5"));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "app_id:" . $APP_ID,
                "app_key:" . $APP_KEY
        ));

        $response = curl_exec($ch);
        dd($response);
        curl_close($ch);

        var_dump($response);
    }
}
