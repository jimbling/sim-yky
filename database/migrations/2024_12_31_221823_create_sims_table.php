<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('sims', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Nama SIM
        $table->text('description')->nullable(); // Deskripsi singkat (opsional)
        $table->string('url'); // URL SIM
        $table->string('icon')->nullable(); // Ikon/logo SIM (opsional)
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sims');
    }
};
