<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LotePago extends Model
{
    use HasFactory;
    protected $dates = [
        'published_on',
      ];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
