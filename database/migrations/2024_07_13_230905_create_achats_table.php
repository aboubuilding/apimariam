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
        Schema::create('achats', function (Blueprint $table) {
            $table->id();



            $table->string('reference')->nullable();
            $table->date('date_achat')->nullable();
            $table->tinyInteger('statut')->nullable();
            $table->bigInteger('annee_id')->nullable();
            $table->string('nom_acheteur')->nullable();
            $table->bigInteger('fournisseur_id')->nullable();
            $table->bigInteger('type_journal_id')->nullable();



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
        Schema::dropIfExists('achats');
    }
};
