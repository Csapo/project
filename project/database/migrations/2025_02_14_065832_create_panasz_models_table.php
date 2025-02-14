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
        Schema::create('panasz_models', function (Blueprint $table) {
            $table->id();
            $table->string('panasz_megnevezes');
            $table->text('panasz_pontos_leirasa');
            $table->string('panaszbejelento_neve');
            $table->date('panasz_bejelentesenek_datuma');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panasz_models');
    }
};
