<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{

   public function getQuestion(){

    return $this -> hasMany('App\Models\QuizQuestion','quiz_id');

   }

    use HasFactory;
}
