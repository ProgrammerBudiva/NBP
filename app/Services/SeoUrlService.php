<?php

namespace App\Services;

use App\Models\SeoUrl;

class SeoUrlService
{
    public $categoryService;

    public function getCollectionId($keyword){
//        dd($keyword);
        $id =  SeoUrl::where('keyword', 'manoir')->first();
        return $id->collection_id;
    }
}