@extends('layouts.app')
<!-- layoutsフォルダの中のapp.blade.phpを継承 -->


@section('contents')
  @if(count($items) > 0)
    @foreach($items as $item)
      <div class="card my-3">
        <div class="card-body">
           <a href="{{ route('quiz', ['place_id'=>$item->id]) }}">{{$item->name}}の難読地名クイズ</a>
        </div>
      </div>
    @endforeach
  @endif
@endsection
