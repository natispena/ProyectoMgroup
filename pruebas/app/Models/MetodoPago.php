<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
class MetodoPago extends Model
{
    
    
  use HasFactory;

  protected $dates = [
    'published_on',
  ];

  public function clientes() {
    return $this->belongsToMany(Cliente::class);
}
}