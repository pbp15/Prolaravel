<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table='pedido'; /* hace referencia a la tabla */
    protected $primaryKey='idpedido'; /* la llave primaria */ 
    public $timestamps= false; /* con el false le  decimos que no se 
    agregen esas columnas de creacion y actualizacion del registro  */

    protected $fillable=[   /*  aqui especificamos los atributos*/
        'idmesa',
        'fecha',
        'precio',
        'idfoods'
        
        
    ];

    protected $guarded =[

    ];
}
