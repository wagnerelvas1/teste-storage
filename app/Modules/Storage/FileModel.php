<?php

namespace App\Modules\Storage;

use App\Modules\User\UserModel;
use Illuminate\Database\Eloquent\Model;

class FileModel extends Model {
    protected $table = 'files';
    protected $fillable = ['nome', 'directory_id', 'user_id'];

    public function user() {
        $this->belongsTo(UserModel::class,  'user_id', 'id');
    }

    public function directory() {
        $this->belongsTo(DirectoryModel::class, 'directory_id', 'id');
    }
}
