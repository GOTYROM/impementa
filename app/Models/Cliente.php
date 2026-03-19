<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function telefonos()
    {
        return $this->hasMany(Telefono::class, 'codigocliente', 'codigocliente');
    }
}
