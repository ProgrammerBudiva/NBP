<?php

namespace App\Http\Controllers;

use App\Models\collection;
use App\Services\CollectionService;

use App\Models\SeoUrl;
use App\Services\SeoUrlService;

class CollectionController extends Controller
{
    public $collectionService;
    public $seoUrlService;

    public function __construct(CollectionService $collectionService, SeoUrlService $seoUrlService)
    {
        $this->collectionService = $collectionService;
        $this->seoUrlService = $seoUrlService;
    }

    public function index($keyword){
        $id = $this->seoUrlService->getCollectionId($keyword);


        $arr = $this->collectionService->getCollection($id);
        return view('collections.collection', ['charcs' => $arr]);
    }
}