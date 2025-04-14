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
        Schema::create('proyeks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_proyek')->nullable();
            $table->string('location')->nullable();
            $table->integer('manpower')->nullable();
            $table->integer('duration')->nullable();
            $table->text('description')->nullable();
            $table->string('documentation')->nullable();
            $table->timestamps();    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('proyeks', function (Blueprint $table) {
            $table->dropColumn(['nama_proyek','location', 'manpower', 'duration', 'description', 'documentation']);
        });
    }
};

