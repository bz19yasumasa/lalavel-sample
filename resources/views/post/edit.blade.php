@extends('layouts.app')

@section('content')
    <div class="container" >

        <form action="/post/update/{{$post->id}}" method="post">
        @csrf
            <div class="form-group">
                <label for="content">投稿内容</label>
                <textarea class="form-control" id="content" name="content">{{$post->content}}</textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="投稿">
        </form>

    </div>
@endsection