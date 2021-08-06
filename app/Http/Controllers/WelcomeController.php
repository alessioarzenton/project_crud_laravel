<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Car;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome() {

        $articles = Article::all();
        $cars = Car::all();
        return view('welcome', compact('articles','cars'));
    }
}
