<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{   
    public function courses(){
        return $this->hasMany(Course::class);
    }

    protected $fillable = [
        'number',
        'brand'
    ];
}
