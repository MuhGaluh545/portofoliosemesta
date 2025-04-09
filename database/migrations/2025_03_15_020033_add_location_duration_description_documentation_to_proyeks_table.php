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
        Schema::table('proyeks', function (Blueprint $table) {
            $table->string('location')->after('name_proyek'); // Lokasi proyek
            $table->integer('duration')->after('manpower'); // Durasi proyek
            $table->text('description')->nullable()->after('duration'); // Deskripsi proyek
            $table->string('documentation')->nullable()->after('description'); // Dokumentasi proyek
        });
    }

    public function down()
    {
        Schema::table('proyeks', function (Blueprint $table) {
            $table->dropColumn(['location', 'duration', 'description', 'documentation']);
        });
    }
};
