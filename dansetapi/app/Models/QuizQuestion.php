<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    public function getAnswer(){

       return $this -> hasMany('App\Models\Answer','question_id');

    }
    use HasFactory;
}
