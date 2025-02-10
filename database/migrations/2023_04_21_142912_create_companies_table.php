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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('nume_companie');
            $table->string('nume_reprezentant');
            $table->string('nume_utilizator');
            $table->string('email');
            $table->string('password');
            $table->string('token')->nullable();
            $table->string('logo')->nullable();
            $table->string('numar_telefon')->nullable();
            $table->string('adresa')->nullable();
            $table->integer('companie_location_id')->nullable();
            $table->integer('companie_size_id')->nullable();
            $table->integer('companie_domain_id')->nullable();
            $table->string('website')->nullable();
            $table->text('descriere')->nullable();
            $table->text('map_code')->nullable();
            $table->text('facebook')->nullable();
            $table->text('twitter')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('instagram')->nullable();
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
        Schema::dropIfExists('companies');
    }
};
