<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsnpmTable extends Migration
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
            $table->interger('Locuri');
            $table->longText('Consum');
            $table->longText('Transmisie');
            $table->longText('Putere');
            $table->longText('An aparitie');
            $table->longText('Pret de baza');
            $table->longText('Combustibil');
            $table->longText('Caroserie');
            $table->longText('Grad de poluare');
            $table->longText('Tractiune');
            $table->longText('Dotari standard');
            $table->timestamp('failed_at')->useCurrent();
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
