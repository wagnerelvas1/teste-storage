<?php

namespace App\Modules\User\dto;

use Illuminate\Foundation\Http\FormRequest;

class CreateFile extends FormRequest {
    public function authorize() : bool {
        return true;
    }

    public function rules() : array {
        return [
            'name' => 'required|string',
            'user_id' => 'required|int|exists:users,id',
        ];
    }
}





