<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;

    public function area(){
        return $this->belongsTo(Area::class);
    }

    public function training_center(){
        return $this->belongsTo(TrainingCenter::class);
    }

    protected $fillable = [
        'course_number',
        'day',
        'area_id',
        'training_center_id'
    ];
}
