@extends('layouts.app')
<!-- layoutsフォルダの中のapp.blade.phpを継承 -->

@section('title', '投稿クイズ一覧')

@section('abstract')
  @if(count($posts) > 0)
    @foreach($posts as $post)
      <div class="card my-3">
        <div class="card-body">
          <h5 class="card-title">{{$post['title']}}</h5>
          <p class="card-text">{{$post['abstract']}}</p>
        </div>
      </div>
    @endforeach
  @endif
@endsection
