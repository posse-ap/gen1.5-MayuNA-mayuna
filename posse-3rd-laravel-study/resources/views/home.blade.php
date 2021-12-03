@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-subtitle">
                        <p class="card-text">ユーザー画面</p>
                        <div class="card my-3">
                            <div class="card-body">
                                <a href="{{ url('quiz')}}">全国の難読地名クイズ</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-subtitle">
                        <p class="card-text">管理画面</p>
                        <div class="card my-3">
                            <div class="card-body">
                                <a href="">一覧</a>
                            </div>
                        </div>
                        <div class="card my-3">
                            <div class="card-body">
                                <a href="">編集画面</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
