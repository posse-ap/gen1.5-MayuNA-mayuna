<?php

namespace App\Http\Controllers;
use App\Place;
use App\Question;
use App\Choice;
use Illuminate\Http\Request;

class CrazyController extends Controller
{
    public function index()
    {
        $items = Place::all();

//controllerからviewへの変数の受け渡し
//view('blade.phpの前についてる名前', 使いたい配列)
        return view('quiztitle',compact('items'));
    }

    public function quiz($place_id)
    {
        //$place_idを1か2か判断
        $items = Place::find($place_id);


//controllerからviewへの変数の受け渡し
//view('blade.phpの前についてる名前', 使いたい配列)
        return view('quiz',compact('items'));
    }

//     public function quiz()
//     {
//         $elements = Question::all();
//         $items = Choice::all();

//         }

// //controllerからviewへの変数の受け渡し
// //view('blade.phpの前についてる名前', 使いたい配列)
//         return view('quiz',compact('elements','each_element'));
//     }
}
