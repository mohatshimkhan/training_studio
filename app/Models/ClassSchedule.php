<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TrainingClass;
use App\Models\Trainer;

class ClassSchedule extends Model
{
    use HasFactory;

    protected $table    = 'class_schedules';

    protected $fillable = ['training_class_id','trainer_id','weekday_1','weekday_1_time','weekday_2','weekday_2_time','is_active','created_at','updated_at'];

    

}