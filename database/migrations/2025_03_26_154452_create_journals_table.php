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
        Schema::create('journals', function (Blueprint $table) {
            $table->id();


            $table->bigInteger('caisse_id')->nullable();

            $table->bigInteger('annee_id')->nullable();
            $table->bigInteger('utilisateur_id')->nullable();
            $table->bigInteger('type_journal_id')->nullable();
           $table->float('montant')->nullable();


           $table->mediumText('description')->nullable();


           $table->tinyInteger('mode_paiement')->nullable();
           $table->tinyInteger('type_transaction')->nullable();
               $table->date('date_journal')->nullable();

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
        Schema::dropIfExists('journals');
    }
};
