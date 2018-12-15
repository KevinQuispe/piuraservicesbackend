<?php

namespace App\Models\Consultas;

use Illuminate\Database\Eloquent\Model;

class InfoReclamos extends Model
{
    protected $table = 'inforeclamos';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id','entidadempresa_id', 'nombre', 'descripcion'
    ];
}
