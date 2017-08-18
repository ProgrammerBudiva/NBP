<?php

namespace App\Services;

use App\Models\collection;

class CollectionService
{
    public $collectionService;

    public function getCollection($id){
        return collection::find($id);
    }
}