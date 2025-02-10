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
        Schema::create('pagina_diverse_items', function (Blueprint $table) {
            $table->id();
            $table->text('titlu_logare');
            $table->text('seo_titlu_logare')->nullable();
            $table->text('seo_descriere_logare')->nullable();
            $table->text('titlu_inregistrare');
            $table->text('seo_titlu_inregistrare')->nullable();
            $table->text('seo_descriere_inregistrare')->nullable();
            $table->text('titlu_parola_uitata');
            $table->text('seo_titlu_parola_uitata')->nullable();
            $table->text('seo_descriere_parola_uitata')->nullable();
            $table->text('titlu_pagina_joburi');
            $table->text('seo_titlu_pagina_joburi')->nullable();
            $table->text('seo_descriere_pagina_joburi')->nullable();
            $table->text('titlu_pagina_companii');
            $table->text('seo_titlu_pagina_companii')->nullable();
            $table->text('seo_descriere_pagina_companii')->nullable();
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
        Schema::dropIfExists('pagina_diverse_items');
    }
};
