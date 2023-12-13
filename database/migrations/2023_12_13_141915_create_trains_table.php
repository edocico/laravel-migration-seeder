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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda');
            $table->string('stazione di partenza');
            $table->string('stazione di arrivo');
            $table->dateTime('orario di partenza');
            $table->dateTime('orario di arrivo');
            $table->unsignedMediumInteger('codice treno');
            $table->unsignedTinyInteger('numero di carrozze');
            $table->boolean('in orario');
            $table->boolean('cancellato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
