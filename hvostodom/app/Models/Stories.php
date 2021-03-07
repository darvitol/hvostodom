<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stories extends Model
{
    protected $table = 'stories';
    public function images(){
        return $this->hasMany('App\Models\StoriesImg', 'story_id');
    }
}
