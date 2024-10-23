<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    //variables globales

    //protected $table='categories';
    //protected $primaryKey="id";
    //public $timestamps=true; -> siempre esta prendido por defecto

    //protected $guarded=[];




    //aqui se ponen las propiedades del módelo
    protected $fillable=[
        'name',
        'description',
        //otros campos...

    ];

    // protected $hidden =[];

    // protected $dates =[];

    /*
    |-------------------------------
    | FUNCTIONS
    |-------------------------------
     */

    // todos los metodos que necesita el constructor


    /*
    |----------------------
    | Relations
    |-------------------------
     */
    // relaciones con otras entidades

    /*
    |-----------------------
    | SCOPE
    |-------------------------
     */

    // quieero crear consultas unicas

    /*
    |-----------------------
    | ACCESORS
    |-------------------------
     */

    //cada ves a colocar un dato y lo combierta a minuscula por ejemplo

    /*
   |-----------------------
   | MUTATORS
   |-------------------------
    */

    // cada ves que los muestre los convierta en decimal etc...



}
