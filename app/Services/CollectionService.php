<?php

namespace App\Services;

use App\Models\collection;

class CollectionService
{
    public $categoryService;

    public function getCollection($id){
        return collection::find($id);
    }
}