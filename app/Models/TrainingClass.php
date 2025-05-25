<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ClassSchedule;
use App\Models\Trainer;

class TrainingClass extends Model
{
    use HasFactory;


    protected $table    = 'training_classes';

    protected $fillable = ['title','summary','description','featured_image','is_active','created_at','updated_at'];


}