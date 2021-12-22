<?php

namespace App\Models\Admin;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merch extends Model
{
    // use HasFactory;
    protected $table = 'upload-merch';

    protected $fillable = ['price', 'size', 'comments','photo_img'];
}
