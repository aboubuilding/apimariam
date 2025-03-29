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
        Schema::create('chauffeurs', function (Blueprint $table) {
            $table->id();

             //infos eleves

             $table->string('numero_permis')->nullable();
             $table->string('nom')->nullable();
             $table->string('prenom')->nullable();
             $table->string('telephone')->nullable();

             $table->date('date_naissance')->nullable();

             $table->tinyInteger('sexe')->nullable();
             $table->tinyInteger('type_permis')->nullable();
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
        Schema::dropIfExists('chauffeurs');
    }
};
