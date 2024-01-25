<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Projets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('id_devis')->nullable();
            $table->integer('id_employer')->nullable();
            $table->string('titre')->nullable();
            $table->string('description')->nullable();
            $table->string('prerequis')->nullable();
            $table->string('contexte')->nullable();
            $table->string('commentaire')->nullable();
            $table->date("date_de_creation")->nullable();
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
