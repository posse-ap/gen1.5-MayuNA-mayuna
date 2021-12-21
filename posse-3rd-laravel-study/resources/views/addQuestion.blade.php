@extends('layouts.app')
@section('content')
    <h1>{{$items->name}}の難読地名クイズ</h1>

    <table class="table table-striped">
      @foreach($items->questions as $question)
      <tr>
      <td>{{$question->id}}</td>
      <td>
      <img src="/storage/{{$question->image_url}}" class="image">
      </td>
        @foreach($question->choices as $choice)
            <td>{{$choice->choice_number}}</td>
            <td>{{$choice->name}}</td>
            @endforeach

      </tr>
      @endforeach
    </table>


    <!-- 設問の追加 -->
    <table class="table table-striped">
    　　<td><p></p></td>
    　　<td>
    　　<form action="{{ route('editchoice', ['place_id'=>$items->id]) }}" enctype="multipart/form-data" method="post">
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

@endsection
