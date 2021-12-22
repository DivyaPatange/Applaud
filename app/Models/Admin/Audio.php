<?php

namespace App\Models\Admin;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    // use HasFactory;
    protected $table = 'upload-audio';

    protected $fillable = ['creator', 'tag', 'title', 'publisher',
            'audiographer', 'date', 'category', 'license', 'cover_img',
            'file_img', 'logo_img', 'option', 'price'];
}
