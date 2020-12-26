@extends('layouts.app')

@section('content')
    <div class="container" >

        <form action="/todo/store" method="post">
        @csrf
            <div class="form-group">
                <h1><label for="content">todoリスト</label></h1>
               <p>タスク</p> <textarea class="form-control" id="task" name="task"></textarea>
               <p>優先順位</p><textarea class="form-control" id="priority" name="priority"></textarea>
               <p>期限</p><textarea class="form-control" id="deadline" name="deadline"></textarea>
               <p>ステータス</p><textarea class="form-control" id="status" name="status"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="追加">
        </form>

    </div>
@endsection
