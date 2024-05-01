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
        Schema::create('zamowienia', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // Dodaj tutaj kolumny dla tabeli Zamówienia
            $table->date('data_zamowienia');
            $table->string('status_zamowienia');

            $table->foreignId('id_klienta')->references('id_klienta')->on('klienci')->onDelete('cascade');
            $table->foreignId('id_diety')->references('id_diety')->on('diety')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zamowienia');
    }
};
