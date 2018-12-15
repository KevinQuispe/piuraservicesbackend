<?php

namespace App\Models\Consultas;

use Illuminate\Database\Eloquent\Model;

class InfoTramites extends Model
{
    protected $table = 'infotramites';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'id', 'entidadempresa_id', 'nombre', 'descripcion'
    ];
}
