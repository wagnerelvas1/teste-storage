<?php

namespace App\Modules\Storage;

use App\Modules\User\UserModel;
use Illuminate\Database\Eloquent\Model;

class DirectoryModel extends Model {
    protected $table = 'directories';
    protected $fillable = ['path', 'user_id'];

    public function user() {
        return $this->belongsTo(UserModel::class, 'user_id', 'id');
    }
}


