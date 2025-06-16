<?php

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

        Schema::create('school_registration_tokens', function (Blueprint $table) {
            $table->id();
            $table->string('token')->unique();
            $table->uuid('school_uuid')->unique();
            $table->string('name');
            $table->string('npsn')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->enum('status', ['active', 'expired', 'used'])->default('active');
            $table->date('valid_until')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_tokens');
    }
};
