<?php

namespace App\Modules\Storage;

use Illuminate\Database\Eloquent\Model;

class DirectoryModel extends Model {
    protected $table = 'directories';
    protected $fillable = ['path', 'user_id'];
}


