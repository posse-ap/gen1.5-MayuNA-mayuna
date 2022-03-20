@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">一覧</div>

                <div class="card-body">
                        <div class="card my-3">
                            @foreach($items as $item)
                                <div class="card-body">
                                    <p>{{$item->name}}の難読地名クイズ</p>
                                </div>
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
