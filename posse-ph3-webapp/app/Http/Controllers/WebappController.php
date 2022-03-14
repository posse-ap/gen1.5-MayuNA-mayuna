<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebappController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function webapp()
    {
        //controllerからviewへの変数の受け渡し
        //view('blade.phpの前についてる名前', 使いたい配列)
        return view('webapp_home');
    }
}
