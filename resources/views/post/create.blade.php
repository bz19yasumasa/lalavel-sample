@extends('layouts.app')

@section('content')
    <div class="container" >
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/post/store" method="post">
        @csrf
            <div class="form-group">
                <label for="content">投稿内容</label>
                <textarea class="form-control" id="content" name="content"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="投稿">
        </form>

    </div>
@endsection