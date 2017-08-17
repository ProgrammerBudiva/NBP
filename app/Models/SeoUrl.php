<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeoUrl extends Model
{
    protected $table = 'seo_url';

    protected $fillable = [
        'collection_id',
        'keyword',
        'query',
    ];
}
