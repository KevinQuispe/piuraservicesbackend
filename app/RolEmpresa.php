<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolEmpresa extends Model
{
    protected $table = 'rolempresa';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $dates = ['deleted_at'];
    protected $fillable = [
      'id', 'nombre',
    ];
}
