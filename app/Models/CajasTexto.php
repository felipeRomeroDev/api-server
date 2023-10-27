<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CajasTexto extends Model
{
    use HasFactory;

    protected $table = "cajas_texto";

    protected $fillable = [
      'nombre',
      'id_categoria'
    ];
}
