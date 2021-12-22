<?php

namespace App\Models\Admin;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    // use HasFactory;
    protected $table = 'upload-music';

    protected $fillable = ['option', 'price', 'artist','tag','title','publisher',
            'composer','date','category','license','cover_img',
            'file_img', 'logo_img'];
 
}




  