<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = ['header_logo_title','mba_heading_tag','mba_heading_title','mba_bg_video','cta_title','cta_description','footer_text','created_at','updated_at'];

  
}