<?php

namespace App\Http\Controllers;

use App\Models\collection;
use App\Services\CollectionService;

use App\Models\SeoUrl;
use App\Services\SeoUrlService;

use App\Models\CollectionAdvantages;
use App\Services\CollectionAdvantagesService;

class CollectionController extends Controller
{
    public $collectionService;
    public $seoUrlService;
    public $collectionAdvantagesService;

    public function __construct(CollectionService $collectionService, SeoUrlService $seoUrlService,
                                CollectionAdvantagesService $collectionAdvantagesService)
    {
        $this->collectionService = $collectionService;
        $this->seoUrlService = $seoUrlService;
        $this->collectionAdvantagesService = $collectionAdvantagesService;
    }

    public function index($keyword){
        $id = $this->seoUrlService->getCollectionId($keyword);

        $advantages = $this->collectionAdvantagesService->getCollectionAdvantages($id);
        $arr = $this->collectionService->getCollection($id);
//        dd($arr);/
        return view('collections.collection', ['charcs' => $arr, 'advantages' => $advantages]);
    }
}