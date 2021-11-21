@extends('layouts.base')
<!-- layoutsフォルダの中のbase.blade.phpを継承 -->

@section('title', 'kuizy')

@section('questions')
  @if(count($questions) > 0)
    @foreach($questions as $question)
        <div class="all">
          <h1>{{$question['title']}}</h1>
          <img src="image/{{$question['num']}}.png" class="image">
          <span class="under_line">{{$question['num']}}.この地名はなんて読む？</span><div class="green"></div>
          <li class="button">{{$question['choice1']}}</li>
          <li class="button">{{$question['choice2']}}</li>
          <li class="button">{{$question['choice3']}}</li>
        </div>
    @endforeach
  @endif
@endsection
