<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = 'pets';
    public function images(){
        return $this->hasMany('App\Models\PetsImages');
    }
}
