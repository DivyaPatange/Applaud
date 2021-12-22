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
            // $url = $this->getObjectUrl('uploads/oOqOCal361.png');
        // }
        $url = asset('uploads/61c0a95e36623.png');
        // dd($url);
        $this->recognizeFace($url);
        // $user =  User::create([
            
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        //     'img_name' => $fileName,
        //     'img_path' => $fileName,

        // ]);
        // $url = $user->file_path;
 
        // User::whereId($user->id)->update(['img_url' => $url]);
        // return $user;
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

    public function recognizeFace($url)
    {
        // set variables
        $queryUrl = "http://api.kairos.com/detect";
        $imageObject = '{"image":'.$url.'}';
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
}
