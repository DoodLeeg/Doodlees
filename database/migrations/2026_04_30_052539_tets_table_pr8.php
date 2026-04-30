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
        Schema::create('TestsPr8', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->varchar('Title');
            $table->varchar('Slug');
            $table->integer('Likes');
            $table->dateTime('created_ad');
            $table->dataTime('update_ad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TestPr8');
    }
};