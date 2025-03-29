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
        Schema::create('chauffeur_zones', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('chauffeur_id')->nullable();
            $table->bigInteger('zone_id')->nullable();
            $table->date('date_prise_service')->nullable();
            $table->date('date_arret_service')->nullable();
            $table->tinyInteger('statut')->nullable();

            $table->bigInteger('annee_id')->nullable();



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
        Schema::dropIfExists('chauffeur_zones');
    }
};
