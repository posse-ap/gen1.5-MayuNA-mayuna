<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrazyController extends Controller
{
    public function index()
    {
        $posts = [
            [
              'title' => '東京の難読地名クイズ',
              'abstract' => 'これは東京の難読地名クイズです',
            ],
            [
              'title' => '広島の難読地名クイズ',
              'abstract' => 'これは広島の難読地名クイズです',
            ],
        ];

//controllerからviewへの変数の受け渡し
//view('blade.phpの前についてる名前', 使いたい配列)
        return view('quiztitle',compact('posts'));
    }

    public function eachquiz()
    {
        $questions = [
            [
              'num' => '0',
              'title' => '東京の難読地名クイズ',
              'choice1' => 'たかなわ',
              'choice2' => 'こうわ',
              'choice3' => 'たかわ',
            ],
            [
              'num' => '1',
              'title' => '広島の難読地名クイズ',
              'abstract' => 'これは広島の難読地名クイズです',
              'choice1' => 'かめいど',
              'choice2' => 'かめと',
              'choice3' => 'かめど',
            ],
        ];

//controllerからviewへの変数の受け渡し
//view('blade.phpの前についてる名前', 使いたい配列)
        return view('quiz',compact('questions'));
    }
}
