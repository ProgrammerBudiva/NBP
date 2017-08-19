<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderImages extends Model
{
    protected $table = 'slider_images';

    protected $fillable = [
        'collection_id',
        'image_url',
        'image_alt'
    ];
}
