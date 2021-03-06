<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\MetodoPago;

class Cliente extends Model
{
    
  use HasFactory;

    protected $dates = [
      'published_on',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function metodopagos() {
      
      return $this->belongsToMany(MetodoPago::class);
  }
  public function pagos()
    {
        return $this->hasMany('App\Models\Pago');
    }
}

