<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    protected $table='especies';
    protected $primaryKey='id_especie';

    //define si la llave primaria es o no un numero auto incrementable
    public $incrementing=true;
    //activar o desactrivar etiquetas de tiempo
    public $timestamps=false;

    public $fillable=[
        'id_especie',
        'especie',
        
    ];

}
