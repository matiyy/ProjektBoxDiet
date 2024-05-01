<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diety', function (Blueprint $table) {
            $table->id('id_diety');
            $table->timestamps();
            // Dodaj tutaj kolumny dla tabeli Diety
            $table->string('nazwa_diety');
            $table->text('opis_diety');
            $table->decimal('cena', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diety');
    }
};

