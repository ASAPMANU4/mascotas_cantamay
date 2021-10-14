<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
 protected $table='propietarios';
    protected $primaryKey='id_propietario';

    //define si la llave primaria es o no un numero auto incrementable
    public $incrementing=true;
    //activar o desactrivar etiquetas de tiempo
    public $timestamps=true;

    public $fillable=[
        'id_propietario',
        'nombre',
        'primer_apellido',
        'segundo_apellido',
        'celular',
        'calle',
        'colonia',
        'numint',
        'localidad',
        
    ];
}
