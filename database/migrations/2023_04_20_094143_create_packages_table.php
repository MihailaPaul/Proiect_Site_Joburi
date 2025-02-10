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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('nume_pachet',100);
            $table->smallInteger('pret_pachet');
            $table->smallInteger('durata_pachet');
            $table->tinyInteger('numar_permis_joburi');
            $table->tinyInteger('numar_permis_joburi_promovate');
            $table->tinyInteger('numar_permis_poze');
            $table->tinyInteger('numar_permis_videoclipuri');
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
        Schema::dropIfExists('packages');
    }
};
