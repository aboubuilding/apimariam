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
        Schema::create('caisses', function (Blueprint $table) {
            $table->id();

             $table->string('libelle');
            $table->float('solde_initial')->nullable();
          
          
          
            $table->tinyInteger('statut')->nullable();
            $table->bigInteger('utilisateur_id')->nullable();
        
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
        Schema::dropIfExists('caisses');
    }
};
