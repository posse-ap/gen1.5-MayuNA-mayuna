@extends('layouts.app')
@section('content')
<form method="post" action="{{ route('editchoice', ['place_id'=>$question->id]) }}">
                    {{ csrf_field() }}
                    <p>
                      <input type="text" name="question_id" placeholder="問題番号" value="{{$question->id}}">
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

@endsection
