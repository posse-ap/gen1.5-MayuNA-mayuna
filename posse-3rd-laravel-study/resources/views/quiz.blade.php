@extends('layouts.base')
<!-- layoutsフォルダの中のbase.blade.phpを継承 -->


@section('questions')
  <h1>{{$items->name}}の難読地名クイズ</h1>
  @foreach($items->questions as $question)
        <div class="all">
        <span class="under_line">{{$question->question_number}}.この地名はなんて読む？</span><div class="green"></div>
          <img src="/{{$question->image_url}}" class="image">
            @foreach($question->choices as $choice)
              <li class="button">{{$choice->name}}</li>
            @endforeach
        </div>
  @endforeach
@endsection
