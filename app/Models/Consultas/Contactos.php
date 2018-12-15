<?php

namespace App\Models\Consultas;

use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
    protected $table = 'contactos';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id', 'entidadempresa_id', 'nombreempresa','direccion', 'horario','telefono','tipoatencion',
    ];
}
