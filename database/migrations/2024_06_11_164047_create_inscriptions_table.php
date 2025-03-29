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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();

            $table->date('date_inscription')->nullable();

            $table->bigInteger('eleve_id')->nullable();
            $table->bigInteger('cycle_id')->nullable();
            $table->bigInteger('niveau_id')->nullable();
            $table->bigInteger('last_niveau_id')->nullable();
            $table->bigInteger('classe_id')->nullable();
            $table->bigInteger('espace_id')->nullable();
            $table->tinyInteger('type_inscription')->nullable();

            $table->tinyInteger('statut')->nullable();
            $table->bigInteger('annee_id')->nullable();



            $table->tinyInteger('programme_provenance')->nullable();

             // Adresse

            $table->text('adresse_map')->nullable();
            $table->bigInteger('quartier_id')->nullable();


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
        Schema::dropIfExists('inscriptions');
    }
};
