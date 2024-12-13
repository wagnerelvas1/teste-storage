<?php

namespace App\Modules\Storage;

use App\Modules\User\UserModel;
use Illuminate\Database\Eloquent\Model;

class FileModel extends Model {
    protected $table = 'files';
    protected $fillable = ['nome', 'directory_id', 'user_id'];

    public function user() {
        return $this->belongsTo(UserModel::class, 'user_id', 'id');
    }

    public function directory() {
        return $this->belongsTo(DirectoryModel::class, 'directory_id', 'id');
    }
}
