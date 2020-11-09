<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\QuizCategoryController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
################################################################################
//app oluşturur
Route::post('/create/app', [AppController::class, 'create']);
//tüm appleri getirir
Route::get('/get/app/{id}', [AppController::class, 'index']);
################################################################################
################################################################################
//quiz categoty oluşturur
Route::post('/create/quizcat', [QuizCategoryController::class, 'create']);
//id sini verdiğin appin tüm kategorilerini getirir
Route::get('/get/allquizcat/{id}', [QuizCategoryController::class, 'allcat']);
################################################################################
################################################################################
//quiz oluşturur
Route::post('/create/quiz', [QuizController::class, 'create']);
//id sini verdiğin quizcategorynin tüm quizlerini getirir
Route::get('/get/allquiz/{id}', [QuizController::class, 'allquiz']);
################################################################################
################################################################################
//question oluşturur
Route::post('/create/quizquestion', [QuestionController::class, 'create']);
//id sini verdiğin quizin tüm questionlarını getirir
Route::get('/get/allquizquestions/{id}', [QuestionController::class, 'allquestion']);
################################################################################
################################################################################
//answer oluşturur
Route::post('/create/answer', [AnswerController::class, 'create']);
//id sini verdiğin questionun tüm answerlarını getirir
Route::get('/get/allanswer/{id}', [AnswerController::class, 'allanswer']);