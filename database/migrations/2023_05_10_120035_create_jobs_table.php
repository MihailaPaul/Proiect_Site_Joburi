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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->text('titlu');
            $table->text('descriere');
            $table->text('responsabilitati')->nullable();
            $table->text('cerinte')->nullable();
            $table->text('educatie')->nullable();
            $table->text('beneficii')->nullable();
            $table->integer('locuri');
            $table->integer('job_category_id');
            $table->integer('job_location_id');
            $table->integer('job_type_id');
            $table->integer('job_experience_id');
            $table->integer('job_salary_range_id');
            $table->text('map_code')->nullable();
            $table->tinyinteger('este_promovat');
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
        Schema::dropIfExists('jobs');
    }
};
