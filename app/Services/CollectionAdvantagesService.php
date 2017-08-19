<?php

namespace App\Services;

use App\Models\CollectionAdvantages;

class CollectionAdvantagesService
{
    public $collectionAdvantagesService;

    public function getCollectionAdvantages($id){
        return CollectionAdvantages::where('collection_id', $id)->get();
    }
}