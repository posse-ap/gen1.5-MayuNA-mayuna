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


    public function edit()
    {
        $items = Place::all();
//controllerからviewへの変数の受け渡し
//view('blade.phpの前についてる名前', 使いたい配列)
        return view('edit',compact('items'));
    }

    public function all()
    {
        $items = Place::all();
//controllerからviewへの変数の受け渡し
//view('blade.phpの前についてる名前', 使いたい配列)
        return view('all',compact('items'));
    }

    public function add(Request $request) {

        $place = new Place();
        $place->name = $request->place_name;
        $place->save();

        return redirect('/edit');
    }

    public function destroy($id)
    {
        $place = Place::findOrFail($id);
        $place->delete();

        return redirect('/edit');
    }

    public function editTitle($id)
    {
        $items = Place::findOrFail($id);
//controllerからviewへの変数の受け渡し
//view('blade.phpの前についてる名前', 使いたい配列)
        return view('editTitle',compact('items'));
    }

    public function update(Request $request,$id)
    {
    $place = Place::findOrFail($id);
    $place->name = $request->input('name');
    $place->save();
    #return redirect('greeting',['status' => 'UPDATE完了！']);　←error!
    return redirect('edit')->with('status', 'UPDATE完了!');
    }

    public function editchoice($place_id)
    {
        //$place_idを1か2か判断
        $items = Place::find($place_id);


//controllerからviewへの変数の受け渡し
//view('blade.phpの前についてる名前', 使いたい配列)
        return view('choice',compact('items'));
    }



    public function choicedestroy($choice_id)
    {
        $choice = Choice::findOrFail($choice_id);
        $choice->delete();

        return redirect('/');
    }



    public function editEachChoice($choice_id)
    {
        $items = Choice::findOrFail($choice_id);
//controllerからviewへの変数の受け渡し
//view('blade.phpの前についてる名前', 使いたい配列)
        return view('editChoice',compact('items'));
    }



    public function choiceupdate(Request $request,$choice_id)
    {
    $choice = Choice::findOrFail($choice_id);
    $choice->name = $request->input('name');
    $choice->save();
    #return redirect('greeting',['status' => 'UPDATE完了！']);　←error!
    return redirect ('edit')->with('status', '選択肢UPDATE完了!');
    }

    public function choiceadd(Request $request) {

        $choice = new Choice();
        $choice->question_id = $request->question_id;
        $choice->name = $request->choice_name;
        $choice->choice_number = $request->choice_number;
        $choice->valid = $request->valid;
        $choice->save();

        return redirect('edit');
    }

}
