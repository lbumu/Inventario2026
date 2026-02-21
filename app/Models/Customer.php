<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     protected $fillable = [
        'Nombre',
        'Telefono',
        'Correo electronico',
        'Direccion',
        'Rut',
        
    ];

    //Relacion uno a muchos inversa
    public function identity()
    {
        return $this->belongsTo(Identity::class);
    }

        //Relacion uno a muchos
        public function sales()
        {
            return $this->hasMany(Sale::class);
        }

        public function quotes()
        {
            return $this->hasMany(Quote::class);
        }


}
