<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
{
    Schema::table('proyeks', function (Blueprint $table) {
        $table->string('location')->nullable();
        $table->integer('manpower')->nullable();
        $table->integer('duration')->nullable();
        $table->text('description')->nullable();
        $table->string('documentation')->nullable();
    });
}

public function down()
{
    Schema::table('proyeks', function (Blueprint $table) {
        $table->dropColumn(['location', 'manpower', 'duration', 'description', 'documentation']);
    });
}

};

