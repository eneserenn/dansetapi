<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizQuestion;
use App\Models\Quiz;

class QuestionController extends Controller
{
    public function create(Request $req){

        $question = new QuizQuestion; 
        $question -> quiz_id = $req -> quiz_id;
        $question -> question = $req -> question;
        $question -> right_count = $req -> right_count;
        $question -> wrong_count = $req -> wrong_count;
  
        $question -> save();

    }

    public function allquestion($id){

       return Quiz::find($id) -> getQuestion() -> get();

    }
}
