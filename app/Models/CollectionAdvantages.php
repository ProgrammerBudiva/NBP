<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollectionAdvantages extends Model
{
    protected $table = 'collection_advantages';

    protected $fillable = [
        'collection_id',
        'advantage_title',
        'advantage'
    ];
}
