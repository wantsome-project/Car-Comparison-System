<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->text('Brand');
            $table->text('Model');
            $table->longText('Motorizare');
            $table->integer('Locuri');
            $table->longText('Consum');
            $table->longText('Transmisie');
            $table->longText('Putere');
            $table->longText('An_aparitie');
            $table->longText('Pret_de_baza');
            $table->longText('Combustibil');
            $table->longText('Caroserie');
            $table->longText('Grad_de_poluare');
            $table->longText('Tractiune');
            $table->longText('Dotari_standard');
            $table->timestamp('failed_at')->useCurrent();
            $table->string('iMAGE',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
