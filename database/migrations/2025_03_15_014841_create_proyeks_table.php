<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyeks', function (Blueprint $table) {
            $table->id(); // Kolom ID otomatis
            $table->string('name_proyek'); // Nama proyek
            $table->string('location'); // Lokasi proyek
            $table->integer('manpower'); // Jumlah tenaga kerja
            $table->integer('duration'); // Durasi proyek
            $table->text('description')->nullable(); // Deskripsi proyek (bisa null)
            $table->string('documentation')->nullable(); // Dokumentasi proyek (bisa null)
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyeks');
    }
};
