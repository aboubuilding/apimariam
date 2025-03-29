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
        Schema::create('eleves', function (Blueprint $table) {
            $table->id();

              //infos eleves

            $table->string('matricule')->nullable();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('prenom_usuel')->nullable();

            $table->date('date_naissance')->nullable();
            $table->string('lieu_naissance')->nullable();
            $table->tinyInteger('sexe')->nullable();
            $table->bigInteger('nationalite_id')->nullable();
            $table->bigInteger('ecole_provenance_id')->nullable();

             $table->string('photo')->nullable();
            $table->string('carte_identite')->nullable();

            $table->string('naissance_eleve')->nullable();

              //infos parents
           
            $table->bigInteger('parent_id')->nullable();


            //infos de santé
            $table->tinyInteger('groupe_id')->nullable();
            $table->string('certificat_medical')->nullable();
             $table->string('nom_medecin')->nullable();
            $table->string('numero_medecin')->nullable();

            $table->text('allergie')->nullable();

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
        Schema::dropIfExists('eleves');
    }
};
