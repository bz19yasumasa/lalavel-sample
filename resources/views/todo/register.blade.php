@extends('layouts.app')

@section('my_css')

<link href="{{ asset('css/ori_css.css') }}" rel="stylesheet">

@endsection

@section('content')
    <div class="container" >
        <div class="card my-3">
            <div class="card-body">
            <div lass="card-title">登録者：{{$name}}のtodoリスト </div>
            <div><a href="/todo" class="btn btn btn-warning">home</a></div>

        @foreach($todos as $todo)
        <div class="card my-3">
            <div class="card-body">
                <div  id="name_id"><a href="/todo/register/{{$todo->name}}" class="btn btn btn-light">登録者：{{$todo->name}}</a></div>
                <p>タスク： {{$todo->task}}</p>
                <p>優先順位： {{$todo->priority}}</p>
                <p>期限： {{$todo->deadline}}</p>
                <p>ステータス： {{$todo->status}}</p>
                <a href="/todo/edit/{{$todo->id}}" class="btn btn-success">編集</a>
                <a href="/todo/delete/{{$todo->id}}" class="btn btn-danger">削除</a>

            </div>
        </div>
        @endforeach
    </div>
@endsection