<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// Pentru baza de date se foloseste functia de create migration cu care se construiesc tabelele din baza de date direct din cod 
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
// Pentru crearea tabelului care sa contina datelor adminilor a fost creata migratia cu numele admins
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            // Se specifica campurile care pe care tabelul urmeaza sa le contina si tipul de date ale acestora
            $table->id();
            $table->string('Nume');
            $table->string('Email');
            $table->string('Parola');
            $table->string('Poza');
            $table->string('Token');
        //timestamps este responsabila pentru afisarea timpului la care tabelul a fost creea si modificat
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
        Schema::dropIfExists('admins');
    }
};