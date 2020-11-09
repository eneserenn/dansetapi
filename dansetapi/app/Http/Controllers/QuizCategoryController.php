<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizCategory;
use App\Models\App;

class QuizCategoryController extends Controller
{
    public function create(Request $req){

         $quiz_cat = new QuizCategory();
         $quiz_cat -> app_id = $req -> app_id;
         $quiz_cat -> name = $req -> name;
         $quiz_cat -> image_url = $req -> image_url;

         $quiz_cat -> save();
         
    }
    public function allcat($id){

      return App::find($id) -> getQuizCategory() -> get();

    }
}
