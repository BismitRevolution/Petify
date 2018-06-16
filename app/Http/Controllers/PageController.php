<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $pets = [0, 1, 2, 3, 4, 5];
        $articles = [0, 1, 2];
        return view('index')->with('pets', $pets)->with('articles', $articles);
    }
}
