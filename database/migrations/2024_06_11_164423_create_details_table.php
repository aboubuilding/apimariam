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
        Schema::create('details', function (Blueprint $table) {
            $table->id();

            $table->float('montant')->nullable();
            $table->string('libelle')->nullable();
            $table->bigInteger('paiement_id')->nullable();
            $table->bigInteger('type_frais_id')->nullable();
            $table->bigInteger('inscription_id')->nullable();
        

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
        Schema::dropIfExists('details');
    }
};
