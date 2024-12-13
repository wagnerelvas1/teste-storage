<?php

namespace App\Modules\Storage;

use App\Http\Controllers\Controller;

class StorageController extends Controller {
    protected $storage_service;

    public function __construct(StorageService $storage_service) {
        $this->storage_service = $storage_service;
    }

    public function index() {
        return view('index');
    }

    public function createDirectory() {
        
    }


}

