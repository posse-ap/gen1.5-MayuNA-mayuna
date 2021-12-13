@extends('layouts.base')
<!-- layoutsフォルダの中のbase.blade.phpを継承 -->


@section('questions')
  <h1>{{$items->name}}の難読地名クイズ</h1>
  @foreach($items->questions as $question)
        <div class="all">
        <span class="under_line">{{$question->question_number}}.この地名はなんて読む？</span><div class="green"></div>
          <img src="/{{$question->image_url}}" class="image">
           @foreach($question->choices->shuffle() as $choice)
              <li class="button" id ="choice_{{$choice->choice_number}}_{{$choice->question_id}}" name = "choice_{{$choice->question_id}}"onclick=check({{$choice->question_id}},{{$choice->choice_number}},1)>{{$choice->name}}</li>
            @endforeach
            <div class="box" id = "answer_box_{{$choice->question_id}}">
                <p id = "correct_result_{{$question->id}}"></p>
                <p>正解は{{$question->choices[0]->name}}です</p>
            </div>
        </div>
  @endforeach
@endsection
