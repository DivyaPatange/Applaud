<?php

namespace App\Models\Admin;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    // use HasFactory;
    protected $table = 'upload-photo';

    protected $fillable = ['option', 'price', 'creator', 'tag', 'title',
            'publisher', 'photographer', 'date','category','license','photo_img'];
}
