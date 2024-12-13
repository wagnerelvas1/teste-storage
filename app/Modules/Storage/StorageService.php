<?php

namespace App\Modules\Storage;

class StorageService {
    protected $storage_repository;

    public function __construct(StorageRepository $storage_repository) {
        $this->storage_repository = $storage_repository;
    }
}
