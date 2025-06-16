<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = [
        'name'
    ];

    public function courses(){
        return $this->hasMany(Course::class);
    }

    protected $allowIncluded = ['user', 'user.computer'];
    
    // Funcion del scope include
    public function scopeIncluded(Builder $query){

        $relations = explode(',', request('included'));

        return $query->with($relations);
    }
}
