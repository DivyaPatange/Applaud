<?php

namespace App\Models\Admin;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    // use HasFactory;
    protected $table = 'upload-video';

    protected $fillable = ['option', 'price', 'creator', 'tag', 'title',
            'publisher', 'videographer', 'date','category','license','cover_img',
            'file_img', 'logo_img'];
}
