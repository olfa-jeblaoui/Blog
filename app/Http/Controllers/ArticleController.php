<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function accueil(){
        return view('Accueil');
    }
    public function TableauxBord(){
        return view('TableauxBord');
    }
}
