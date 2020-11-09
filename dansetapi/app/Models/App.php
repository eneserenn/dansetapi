<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    public function getQuizCategory(){

        return $this -> hasMany('App\Models\QuizCategory','app_id');
    }

    use HasFactory;
}
