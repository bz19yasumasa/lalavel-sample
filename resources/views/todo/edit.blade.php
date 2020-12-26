@extends('layouts.app')

@section('content')
    <div class="container" >

        <form action="/todo/update/{{$todo->id}}" method="post">
        @csrf
            <div class="form-group">
                <label for="content">投稿内容</label>
                <h1><label for="content">todoリスト</label></h1>
                <p>タスク</p> <textarea class="form-control" id="task" name="task">{{$todo->task}}</textarea>
                <p>優先順位</p><textarea class="form-control" id="priority" name="priority">{{$todo->priority}}</textarea>
                <p>期限</p><textarea class="form-control" id="deadline" name="deadline">{{$todo->deadline}}</textarea>
                <p>ステータス</p><textarea class="form-control" id="status" name="status">{{$todo->status}}</textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="投稿">
        </form>

    </div>
@endsection