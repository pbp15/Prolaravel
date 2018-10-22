<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='categoria'; /* hace referencia a la tabla */
    protected $primaryKey='idcategoria'; /* la llave primaria */ 
    public $timestamps= false; /* con el false le  decimos que no se 
    agregen esas columnas de creacion y actualizacion del registro  */

    protected $fillable=[   /*  aqui especificamos los atributos*/
        'nombre',
        'descripcion',
        'condicion'
    ];

    protected $guarded =[

    ];
}
