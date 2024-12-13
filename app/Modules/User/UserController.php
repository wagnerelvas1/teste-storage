<?php

namespace App\Modules\User;

use App\Http\Controllers\Controller;

class UserController extends Controller {
    protected $user_service;

    public function __construct(UserService $user_service) {
        $this->user_service = $user_service;
    }
}

