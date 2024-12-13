<?php

namespace App\Modules\User;

use App\Modules\Storage\DirectoryModel;
use App\Modules\Storage\FileModel;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model {
    protected $table = 'users';
    protected $fillable = ['nome', 'email', 'senha'];
    protected $hidden = ['senha'];
    protected $casts = ['senha' => 'hashed'];

    public function files() {
        $this->hasMany(FileModel::class, 'user_id', 'id');
    }

    public function directories() {
        $this->hasMany(DirectoryModel::class, 'user_id', 'id');
    }
}




