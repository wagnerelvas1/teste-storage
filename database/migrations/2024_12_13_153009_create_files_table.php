<?php

use App\Modules\Storage\DirectoryModel;
use App\Modules\User\UserModel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->foreignIdFor(DirectoryModel::class, 'directory_id')->constrained()->onDelete('cascade');
            $table->foreignIdFor(UserModel::class, 'user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
