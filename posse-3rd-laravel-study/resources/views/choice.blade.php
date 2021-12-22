@extends('layouts.app')
@section('content')
    <h1>{{$items->name}}の難読地名クイズ</h1>

    <table class="table table-striped">
      @foreach($items->questions as $question)
      <tr>
      <td>{{$question->id}}</td>
      <td>
      <img src="/storage/{{$question->image_url}}" class="image">
      <form action="{{ route('question_id', ['question_id'=>$question->id]) }}" enctype="multipart/form-data" method="post">
       @csrf
       <input type="hidden" name="id" value="{{$question->id}}">
       <input type="hidden" name="question_number" value="{{$question->question_number}}">
       <input type="hidden" name="place_id" value="{{$question->place_id}}">
       <input type="file" name="image">
       <input type="submit" value="アップロードする">
      </form>

      </td>
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
            <!-- 選択肢の追加 -->
            <td>
               <a class="btn btn-primary btn-sm" href="/edit/choice/add/{{$question->id}}">選択肢の追加</a>
            </td>
      </tr>
      @endforeach
    </table>


    <!-- 設問の追加 -->
    <table class="table table-striped">
    　　<td><p></p></td>
    　　<td>
    　　<form action="{{ route('questionadd', ['place_id'=>$items->id]) }}" enctype="multipart/form-data" method="post">
           @csrf　　  　　 　
           <p>
             <input type="text" name="question_number" placeholder="設問番号">
           </p>
           <p>
               <input type="hidden" name="place_id" value="{{$items->id}}">
           </p>
           <p>
             <input type="file" name="image">
             <input type="submit" value="アップロードする">
           </p>
    　　 </form>
    　
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
