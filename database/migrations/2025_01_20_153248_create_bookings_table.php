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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tour_id')->constrained()->onDelete('cascade'); // Relasi ke `tours`
            $table->string('name'); // Nama wisatawan
            $table->integer('people_count'); // Jumlah orang
            $table->boolean('has_children')->default(false); // Membawa anak
            $table->string('contact'); // Kontak (misalnya nomor WhatsApp)
            $table->date('date'); // Tanggal booking
            $table->time('time'); // Jam booking
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
