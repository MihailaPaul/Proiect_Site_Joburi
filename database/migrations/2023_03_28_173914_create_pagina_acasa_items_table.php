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
        Schema::create('pagina_acasa_items', function (Blueprint $table) {
            $table->id();
            $table->text('titlu');
            $table->text('text')->nullable();
            $table->text('titlu_job');
            $table->text('categorie_job');
            $table->text('locatie_job');
            $table->text('text_buton');
            $table->text('fundal');
            $table->text('titlu_sectiune_categorie');
            $table->text('text_sectiune_categorie')->nullable();
            $table->text('stare_sectiune_categorie');
            $table->text('sectiune_alegere_titlu');
            $table->text('sectiune_alegere_text')->nullable();
            $table->text('sectiune_alegere_fundal');
            $table->text('sectiune_alegere_stare');
            $table->text('sectiune_recomandari_titlu');
            $table->text('sectiune_recomandari_text');
            $table->text('sectiune_recomandari_stare');
            $table->text('sectiune_multumiri_titlu');
            $table->text('sectiune_multumiri_fundal');
            $table->text('sectiune_multumiri_stare');
            $table->text('sectiune_articole_titlu');
            $table->text('sectiune_articole_text')->nullable();
            $table->text('sectiune_articole_stare');
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
        Schema::dropIfExists('pagina_acasa_items');
    }
};
