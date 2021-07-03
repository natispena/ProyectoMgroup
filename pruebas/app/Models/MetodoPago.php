<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clientes;
class MetodoPago extends Model
{
    
    
  use HasFactory;

  protected $dates = [
    'published_on',
  ];

  public function clientes() {
    return $this->belongsToMany(Clientes::class, 'metodo_cliente', 'metodo_id', 'cliente_id');
}
}