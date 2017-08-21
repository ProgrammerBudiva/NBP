<?php

namespace App\Http\Controllers;

use App\Models\collection;
use App\Services\CollectionService;

use App\Models\SeoUrl;
use App\Services\SeoUrlService;

use App\Models\CollectionAdvantages;
use App\Services\CollectionAdvantagesService;

use App\Models\CollectionImages;
use App\Services\CollectionImagesService;

use App\Models\SliderImages;
use App\Services\CollectionSliderImagesService;

class CollectionController extends Controller
{
    public $collectionService;
    public $seoUrlService;
    public $collectionAdvantagesService;
    public $collectionImagesService;
    public $collectionSliderImagesService;

    public function __construct(CollectionService $collectionService, SeoUrlService $seoUrlService,
                                CollectionAdvantagesService $collectionAdvantagesService,
                                CollectionImagesService $collectionImagesService,
                                CollectionSliderImagesService $collectionSliderImagesService)
    {
        $this->collectionService = $collectionService;
        $this->seoUrlService = $seoUrlService;
        $this->collectionAdvantagesService = $collectionAdvantagesService;
        $this->collectionImagesService = $collectionImagesService;
        $this->collectionSliderImagesService = $collectionSliderImagesService;
    }

    public function index($keyword){
        $id = $this->seoUrlService->getCollectionId($keyword);

        $advantages = $this->collectionAdvantagesService->getCollectionAdvantages($id);
        $arr = $this->collectionService->getCollection($id);
        $images = $this->collectionImagesService->getCollectionImages($id);
        $slides = $this->collectionSliderImagesService->getCollectionSlides($id);

        return view('collections.collection', ['charcs' => $arr, 'advantages' => $advantages,
            'images' => $images, 'slides' => $slides]);
    }

    public function all(){
        return view('collections.all-collection');
    }
}