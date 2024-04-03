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
        Schema::create('adoption_apps', function (Blueprint $table) {
            $table->bigIncrements('id_adoption');
            $table->foreignId('id_parent');
            $table->string('nama_adopter');
            $table->string('nohp_adopter');
            $table->string('email_adopter');
            $table->string('alamat_adopter');
            $table->date('tanggal');
            $table->text('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adoption_apps');
    }
};
