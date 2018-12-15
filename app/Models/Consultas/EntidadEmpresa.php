<?php

namespace App\Models\Consultas;

use Illuminate\Database\Eloquent\Model;

class EntidadEmpresa extends Model
{
    protected $table = 'entidadempresa';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $dates = ['deleted_at'];

    protected $fillable = [
      'id', 'nombre', 'direccion', 'telefono','correo', 'horario', 'webentidad'
    ];
    
    function InfoReclamosEmpresa(){
        $this->belongsTo(InfoReclamosEmpresa::class);
    }
    function InfoTramitesEmpresa(){
      $this->belongsTo(InfoTramitesEmpresa::class);
    }
}
