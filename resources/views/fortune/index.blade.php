@extends('layouts.app')

@section('content')
    <div class="container" >

        <form action="/fortune/result" method="post">
        @csrf
            <div class="form-group">
                <label for="height">今日の占い</label>
            </div>
            <div class="form-group">
                <label for="sign">星座</label>
                <input class="form-control" type="tetx" id="sign" name="sign">
            </div>
            <div class="form-group">
                <label for="bloodtype">血液型</label>
                <input class="form-control" type="tetx" id="bloodtype" name="bloodtype">
            </div>

            <input type="submit" class="btn btn-primary" value="占い開始">
        </form>

    </div>
@endsection