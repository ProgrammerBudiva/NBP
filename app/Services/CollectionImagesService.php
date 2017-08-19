<?php

namespace App\Services;

use App\Models\CollectionImages;

class CollectionImagesService
{
    public $collectionService;

    public function getCollectionImages($id){
        return CollectionImages::where('collection_id', $id)->get();
    }
}