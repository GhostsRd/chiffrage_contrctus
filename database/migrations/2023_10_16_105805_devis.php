<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Devis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('id_client');
            $table->integer('id_projet');
            $table->string('objet_chiffrage');
            $table->integer('delai_mise_en_oeuvre')->nullable();
            $table->string('choix_planification')->nullable();
            $table->string('etat_devis')->nullable();
            $table->integer('montant_total')->nullable();
            $table->date('date_creation')->nullable();
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
        //
    }
}
