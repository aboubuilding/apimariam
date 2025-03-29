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
        Schema::create('depenses', function (Blueprint $table) {
            $table->id();

             $table->string('reference')->nullable();
            $table->string('beneficaire')->nullable();
             $table->string('telephone_beneficiaire')->nullable();
            $table->text('commentaire')->nullable();
            $table->date('date_depense')->nullable();

          
            $table->bigInteger('annee_id')->nullable();

            $table->bigInteger('utilisateur_id')->nullable();

            $table->tinyInteger('statut_depense')->nullable();

             $table->bigInteger('fournisseur_id')->nullable();

         

                 $table->bigInteger('categorie_depense_id')->nullable();


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
        Schema::dropIfExists('depenses');
    }
};
