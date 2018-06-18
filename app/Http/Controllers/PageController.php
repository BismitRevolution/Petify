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

    public function get() {
        // $pet = [
        //     'name' => 'Pet Name',
        //     'age' =>  6,
        //     'gender' => 1,
        // ];
        $pet = new \stdClass();
        $pet->name = "Pet Name";
        $pet->age = 6;
        $pet->gender = 1;
        // dd($pet);
        return view('pages/pet')->with('pet', $pet);
    }
}
