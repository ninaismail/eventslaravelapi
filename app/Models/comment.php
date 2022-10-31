<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'body', 'event_id', 'name', 'email'
      ];
    
      public function event()
      {
        return $this->belongsTo('App\Models\Event');
      }
}
