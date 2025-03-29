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
        Schema::create('transaction_stocks', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('produit_id')->nullable();
            $table->bigInteger('annee_id')->nullable();
            $table->bigInteger('boutique_id')->nullable();
            $table->bigInteger('magasin_id')->nullable();
           $table->float('quantite')->nullable();
           $table->mediumText('commentaire')->nullable();
           $table->date('date_transaction')->nullable();

           $table->tinyInteger('type_transaction')->nullable();
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
        Schema::dropIfExists('transaction_stocks');
    }
};
