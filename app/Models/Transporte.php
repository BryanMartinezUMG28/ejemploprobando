<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{

    //Relacion uno a muchos
    public function camion(){
     return $this->hasMany('App\Models\Camion');



}

    use HasFactory;

}
