<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $fillable= ['الاسم','الرقم','اوقات الدوام','لونكتيوم','لوتيتيود','اختصاص'];
}
