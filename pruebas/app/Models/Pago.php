<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MetodoPago;
use App\Models\Cliente;
class Pago extends Model
{
    use HasFactory;

    protected $dates = [
        'published_on',
      ];
      public function cliente(){
          return $this->belongsTo(Cliente::class);
      }
      
      public function metodoPago(){
        return $this->belongsTo(metodoPago::class);
    }
}
