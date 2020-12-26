@extends('layouts.app')

@section('content')
    <div class="container" >

        <a href="/post/create" class="btn btn-primary">
            作成
        </a>
        @foreach($posts as $post)
        <div class="card my-3">
            <div class="card-body">
               <p> {{$post->content}}</p>
               {{$post->created_at}}
                <a href="/post/edit/{{$post->id}}" class="btn btn-success">編集</a>
                <a href="/post/delete/{{$post->id}}" class="btn btn-danger">削除</a>

            </div>
        </div>
        @endforeach
    </div>
@endsection