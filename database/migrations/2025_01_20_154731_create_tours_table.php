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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama destinasi wisata (misal: Gunung Bromo)
            $table->string('location'); // Lokasi destinasi wisata
            $table->enum('tour_type', ['mountain', 'waterfall', 'hot_spring', 'beach', 'historical']); // Jenis wisata
            $table->text('details'); // Deskripsi lengkap tentang destinasi
            $table->integer('height')->nullable(); // Ketinggian, berlaku untuk jenis gunung
            $table->integer('waterfall_height')->nullable(); // Tinggi air terjun, berlaku untuk jenis waterfall
            $table->boolean('is_popular')->default(false); // Apakah tempat ini populer
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
