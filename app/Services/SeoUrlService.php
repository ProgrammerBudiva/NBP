<?php

namespace App\Services;

use App\Models\SeoUrl;

class SeoUrlService
{
    public $seoUrlService;

    public function getCollectionId($keyword){
//        dd($keyword);
        $id =  SeoUrl::where('keyword', $keyword)->first();
        return $id->collection_id;
    }
}