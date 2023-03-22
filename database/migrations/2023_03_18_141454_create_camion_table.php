<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camion', function (Blueprint $table) {
            $table->id();
            $table ->integer('id_placa')->unique();
            $table ->string('placa_camion', 6);
            $table ->string('marca', 45);
            $table ->string('color', 25);
            $table ->date('modelo');
            $table ->integer('capacidad_toneladas');

            $table ->unsignedBigInteger('transporte_codigo');
            $table ->foreign('transporte_codigo')
                ->references('id')
                ->on('transporte');
                //->onDelete('set null'); //Cuando se elimine un trasnporte, los datos no se coloque como NULL (Nulo).




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
        Schema::dropIfExists('camion');
    }
}
