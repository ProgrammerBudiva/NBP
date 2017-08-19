<?php

namespace App\Services;

use App\Models\SliderImages;

class CollectionSliderImagesService
{
    public $collectionService;

    public function getCollectionSlides($id){
        return SliderImages::where('collection_id', $id)->get();
    }
}