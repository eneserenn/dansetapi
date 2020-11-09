<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\QuizQuestion;

class AnswerController extends Controller
{
    public function create(Request $req){

      $answer = new Answer;
      $answer -> question_id = $req -> question_id;
      $answer -> answer = $req -> answer;
      $answer -> is_true = $req -> is_true;
      $answer -> save();
    }

    public function allanswer($id){

        return QuizQuestion::find($id) -> getAnswer() -> get();
    }
}
