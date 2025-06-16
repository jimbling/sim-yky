<?php

// database/migrations/2025_06_15_000001_create_patches_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('patches', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('version');
            $table->text('description')->nullable();
            $table->string('file_path'); // Lokasi file zip
            $table->boolean('is_public')->default(false); // Untuk semua sekolah?
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('patches');
    }
};
