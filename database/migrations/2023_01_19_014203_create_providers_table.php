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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('nom_provider',50);
            $table->string('prenom_provider',50);
            $table->longtext('description');
            $table->string('photo');
            $table->integer('phone_number');
            $table->unsignedBigInteger('Region_id');
            $table->foreign('Region_id')->references('id')->on('regions');
            $table->unsignedBigInteger('Activity_id');
            $table->foreign('Activity_id')->references('id')->on('activities');
            $table->unsignedBigInteger('User_id');
            $table->foreign('User_id')->references('id')->on('users');
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
        Schema::dropIfExists('providers');
    }
};
