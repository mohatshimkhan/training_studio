<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\TrainingClass;
use App\Models\ClassSchedule;

class Trainer extends Model
{
    use HasFactory;

    
    protected $fillable = ['name','type','summary','description','featured_image','facebook_url','twitter_url','linkedin_url','behance_url','is_active','created_at','updated_at'];




}