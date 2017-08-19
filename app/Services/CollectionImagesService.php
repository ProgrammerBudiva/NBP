<?php

namespace App\Services;

use App\Models\CollectionImages;

class CollectionImagesService
{
    public $collectionService;

    public function getCollectionImages($id){
        return CollectionImages::find($id);
    }
}