@extends('layouts.app')

@section('content')
    <div class="container" >

        <form action="/bmi/calc" method="post">
        @csrf
            <div class="form-group">
                <label for="height">身長</label>
                <input class="form-control" type="number" id="height" name="height">
            </div>
            <div class="form-group">
                <label for="weight">体重</label>
                <input class="form-control" type="number" id="weight" name="weight">
            </div>
            <input type="submit" class="btn btn-primary" value="計算">
        </form>

    </div>
@endsection