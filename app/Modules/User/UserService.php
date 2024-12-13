<?php

namespace App\Modules\User;

class UserService {
    protected $user_repository;

    public function __construct(UserRepository $user_repository) {
        $this->user_repository = $user_repository;
    }
}



