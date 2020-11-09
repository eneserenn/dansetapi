<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;

class AppController extends Controller
{
    public function index($id){
        
        return App::find($id);
    }

    public function create(Request $req){
        
        $app = new App;
        $app -> name = $req -> name;
        $app -> image_url = $req -> image_url;
        $app -> save();
    }
}
