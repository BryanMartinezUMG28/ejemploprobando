<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transporte;
use App\Models\Camion;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $transporte= new Transporte();
        $transporte->codigo='ABCD';
        $transporte->nombre='Transporte Chingones';
        $transporte->razon_social='Laborando';
        $transporte->save();

        $camion= new Camion();
        $camion->id_placa='789';
        $camion->placa_camion='C789BDR';
        $camion->marca='Volvo';
        $camion->color='Rojo';
        $camion->modelo='2023-02-02';
        $camion->capacidad_toneladas='10000';
        $camion->tranporte_codigo='';
        $camion->save();

    }


}
