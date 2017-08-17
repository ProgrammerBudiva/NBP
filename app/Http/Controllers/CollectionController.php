<?php

namespace App\Http\Controllers;

use App\Models\collection;
use App\Services\CollectionService;

class CollectionController extends Controller
{
    public $collectionService;

    public function __construct(CollectionService $collectionService)
    {
        $this->collectionService = $collectionService;
    }

    public function index(){
        $arr = $this->collectionService->getCollection(1);
        return view('collections.manoir', ['charcs' => $arr]);
    }
}