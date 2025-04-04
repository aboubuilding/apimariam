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
        Schema::create('validations', function (Blueprint $table) {
            $table->id();

            $table->tinyInteger('statut')->nullable();
            $table->bigInteger('utilisateur_id')->nullable();
            $table->bigInteger('inscription_id')->nullable();
            $table->bigInteger('annee_id')->nullable();
            $table->text('commentaire')->nullable();
            $table->date('date_validation')->nullable();

            $table->integer('etat')->default(1);
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
        Schema::dropIfExists('validations');
    }
};
