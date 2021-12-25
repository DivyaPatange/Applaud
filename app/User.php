<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'filename', 'filepath', 'filesize', 'subject_id', 'gallery_name', 'face_id', 'confidence', 'quality'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ['file_path'];

    public function getFilePathAttribute()
    {
        $disk = Storage::disk('s3');
        if ($disk->exists($this->img_path)) {
            $command = $disk->getDriver()->getAdapter()->getClient()->getCommand('GetObject', [
                'Bucket'                     => config('filesystems.disks.s3.bucket'),
                'Key'                        => $this->img_path,
                'ResponseContentDisposition' => 'attachment;'
            ]);
    
            $request = $disk->getDriver()->getAdapter()->getClient()->createPresignedRequest($command, '+5 minutes');
           
            return (string) $request->getUri();
        }
    }
}
