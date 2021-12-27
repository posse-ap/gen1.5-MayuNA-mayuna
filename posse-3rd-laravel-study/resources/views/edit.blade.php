@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">編集</div>

                <div class="card-body">
                        <div class="card my-3">
                            @if(session('status'))<div class="alert alert-success" role="alert" onclick="this.classList.add('hidden')">{{ session('status') }}@endif
                            <table class="table table-striped">
                                <!-- loop -->
                                <tbody id="sortable">

                                    @foreach($items as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td><a href="{{ route('editchoice', ['place_id'=>$item->id]) }}">{{$item->name}}</a></td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="/edit/{{$item->id}}">編集</a>
                                            <form action="{{ action('CrazyController@destroy', $item->id) }}" id="form_{{ $item->id }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <a href="#" data-id="{{ $item->id }}" class="btn btn-danger btn-sm" onclick="deletePost(this);">削除</a>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <script>
                            // 削除確認メッセージjs
                            function deletePost(e) {
                              'use strict';

                              if (confirm('本当に削除していいですか?')) {
                              document.getElementById('form_' + e.dataset.id).submit();
                              }
                            }
                        </script>
                        <form method="post" action="{{ url('/edit') }}">
                                {{ csrf_field() }}
                                <p>
                                  <input type="text" name="place_name" placeholder="地名を入力">
                                </p>
                                <p>
                                  <input type="submit" value="追加">
                                </p>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
