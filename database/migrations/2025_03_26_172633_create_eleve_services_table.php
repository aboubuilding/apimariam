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
        Schema::create('eleve_services', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('inscription_id')->nullable();
            $table->bigInteger('service_id')->nullable();
            $table->date('date_inscription')->nullable();
            $table->float('montant')->nullable();
            $table->float('taux_remise')->nullable();
            $table->bigInteger('annee_id')->nullable();
            $table->bigInteger('type_service_id')->nullable();
            $table->tinyInteger('statut')->nullable();

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
        Schema::dropIfExists('eleve_services');
    }
};
