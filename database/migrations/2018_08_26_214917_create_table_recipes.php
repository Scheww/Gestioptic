<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRecipes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->string('medic')->nullable();
            $table->float('cilindric_right_eye_near')->nullable();
            $table->float('esferic_right_eye_near')->nullable();
            $table->float('cilindric_left_eye_near')->nullable();
            $table->float('esferic_left_eye_near')->nullable();
            $table->string('near_armazon')->nullable();
            $table->float('cilindric_right_eye_intermediate')->nullable();
            $table->float('esferic_right_eye_intermediate')->nullable();
            $table->float('cilindric_left_eye_intermediate')->nullable();
            $table->float('esferic_left_eye_intermediate')->nullable();
            $table->string('intermediate_armazon')->nullable();
            $table->float('cilindric_right_eye_far')->nullable();
            $table->float('esferic_right_eye_far')->nullable();
            $table->float('cilindric_left_eye_far')->nullable();
            $table->float('esferic_left_eye_far')->nullable();
            $table->string('far_armazon')->nullable();
            $table->string('observations')->nullable();
            $table->float('multifocal')->nullable();
            $table->float('bifocal')->nullable();
            $table->float('height')->nullable();
            $table->float('state')->nullable();
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
        Schema::dropIfExists('recipes');
    }
}
