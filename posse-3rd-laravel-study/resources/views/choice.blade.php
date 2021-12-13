@extends('layouts.app')
@section('content')
    <h1>{{$items->name}}の難読地名クイズ</h1>
    <table class="table table-striped">
      @foreach($items->questions as $question)
      <tr>
      <td>{{$question->id}}</td>
            @foreach($question->choices as $choice)
            <td>{{$choice->choice_number}}</td>
            <td>{{$choice->name}}</td>
            <td>
                <a class="btn btn-primary btn-sm" href="/edit/choice/each/{{$choice->id}}">編集</a>
                <form action="{{ action('CrazyController@choicedestroy', $choice->id) }}" id="form_{{ $choice->id }}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <a href="#" data-id="{{ $choice->id }}" class="btn btn-danger btn-sm" onclick="deletePost(this);">削除</a>
                </form>
            </td>
            @endforeach
            <td>
                <form method="post" action="{{ route('editchoice', ['place_id'=>$question->id]) }}">
                    {{ csrf_field() }}
                    <p>
                      <input type="text" name="question_id" placeholder="問題番号" value="{{$choice->question_id}}">
                    </p>
                    <p>
                      <input type="text" name="choice_number" placeholder="選択肢番号">
                    </p>
                    <p>
                        <input type="text" name="choice_name" placeholder="選択肢">
                    </p>
                    <p>
                        <input type="radio" name="valid" value="0" checked="checked">不正解の選択肢
                        <input type="radio" name="valid" value="1">正解の選択肢
                    </p>
                    <p>
                      <input type="submit" value="追加">
                    </p>
                </form>
            </td>
      </tr>
      @endforeach
    </table>
    <script>
        // 削除確認メッセージjs
        function deletePost(e) {
          'use strict';
          if (confirm('本当に削除していいですか?')) {
          document.getElementById('form_' + e.dataset.id).submit();
          }
        }
    </script>

@endsection
