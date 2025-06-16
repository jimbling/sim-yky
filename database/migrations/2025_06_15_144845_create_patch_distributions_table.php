<?php

// database/migrations/2025_06_15_000002_create_patch_distributions_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('patch_distributions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patch_id')->constrained()->cascadeOnDelete();
            $table->foreignId('school_registration_token_id')->constrained()->cascadeOnDelete();
            $table->enum('status', ['pending', 'applied', 'failed'])->default('pending');
            $table->timestamp('applied_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('patch_distributions');
    }
};
