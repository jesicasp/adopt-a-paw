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
        Schema::create('pets', function (Blueprint $table) {
            $table->bigIncrements('id_pet');
            $table->string('nama_pet');
            $table->foreignId('id_type');
            $table->integer('umur');
            $table->enum('jenis_kelamin', ['jantan', 'betina']);
            $table->string('foto');
            $table->text('deskripsi');
            $table->enum('status', ['tersedia', 'diadopsi']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
