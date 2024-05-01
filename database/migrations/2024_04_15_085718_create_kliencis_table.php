<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration

{
    /**
     * Run the migrations.
     *
     *
     */
    public function up()
    {
        Schema::create('klienci', function (Blueprint $table) {
            $table->id('id_klienta');
            // Dodaj tutaj kolumny dla tabeli Klienci
            $table->string('imie');
            $table->string('nazwisko');
            $table->string('adres');
            $table->string('telefon');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     *
     */
    public function down()
    {
        Schema::dropIfExists('klienci');
    }
};
