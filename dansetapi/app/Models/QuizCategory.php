<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizCategory extends Model
{
    
    public function getQuiz(){

        return $this -> hasMany('App\Models\Quiz','cat_id');
    }

    use HasFactory;
}
