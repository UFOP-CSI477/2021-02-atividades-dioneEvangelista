<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coleta extends Model
{
    use HasFactory;

   protected $guarded=[];


    public function entidade() {
        return $this->belongsTo('App\Models\Entidade');
    }

    public function item() {
        return $this->belongsTo('App\Models\Item');
    }
}
