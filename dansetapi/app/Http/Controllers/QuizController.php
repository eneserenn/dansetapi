<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\QuizCategory;

class QuizController extends Controller
{
    public function create(Request $req){
      
      $quiz = new Quiz; 
      $quiz -> cat_id = $req -> cat_id;
      $quiz -> title = $req -> title;
      $quiz -> desc = $req -> desc;
      $quiz -> image_url = $req -> image_url;

      $quiz -> save();
    }

    public function allquiz($id){

        $quizz = QuizCategory::find($id) -> getQuiz() -> get();

        return response()->json(['quizzes' => $quizz]);
  
      }

}
