<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class telefono extends Model
{
    protected $table = 'telefonos';
    protected $fillable = ['id', 'codigocliente', 'numero'];//
}
