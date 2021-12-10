@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <p>タイトル編集フォーム</p>
　　　　　<form class="form-signin" role="form" method="post" action="/edit/choice/update/{{$items->id}}">
　　　　　<input type="hidden" name="_token" value="{{csrf_token()}}">
　　　　　{{-- 隠しフィールド --}}
　　　　　<input type="hidden" name="_method" value="PATCH">
　　　　　<input type="text" name="name" value="{{ $items->name }}" class="form-control" autofocus>
　　　　　  {{-- バリデーション --}}
　　　　　  @if($errors->has('name'))
　　　　　  <p class="text-danger" style="margin-bottom: 30px;">{{ $errors->first('name') }}</p>
　　　　　  @endif
　　　　　<button class="btn btn-lg btn-primary btn-block" type="submit">送信</button>
　　　　　</form>

        </div>
    </div>
</div>
@endsection
