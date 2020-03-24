<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRendezvousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendezvouses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_user')->unsigned();
            #$table->foreign('id_user')->references('id')->on('users');
            $table->integer('id_medecin')->unsigned();
            #$table->foreign('id_medecin')->references('id')->on('medecins');
            $table->string('motif');
            $table->text('remarque');
            $table->integer('montant');
            $table->boolean('etat_payment');    
            /**
             * date et heure sans dans le timestamps
             */
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
        Schema::dropIfExists('rendezvouses');
    }
}
