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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('nume_candidat');
            $table->string('pozitie')->nullable();
            $table->string('nume_utilizator');
            $table->string('email');
            $table->string('password');
            $table->string('token')->nullable();
            $table->string('poza')->nullable();
            $table->text('biografie')->nullable();
            $table->string('numar_telefon')->nullable();
            $table->string('tara')->nullable();
            $table->string('adresa')->nullable();
            $table->string('oras')->nullable();
            $table->string('gen')->nullable();
            $table->string('data_nastere')->nullable();
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
};
