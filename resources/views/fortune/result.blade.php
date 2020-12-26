@extends('layouts.app')

@section('content')
    <div class="container" >

        <div class="card my-3">
            <div class="card-body">
                <p>あなたの今日の運勢は{{$result}}位です。</p>
            </div>
        </div>
        <div class="card my-3">
            <div class="card-body">
                <p>１位： {{$post->task}}</p>
                <p>２位： {{$post->priority}}</p>
                <p>３位： {{$post->deadline}}</p>
                <p>４位： {{$post->status}}</p>
                <p>５位： {{$post->task}}</p>
                <p>６位： {{$post->priority}}</p>
                <p>７位： {{$post->deadline}}</p>
                <p>８位： {{$post->status}}</p>
                <p>９位： {{$post->task}}</p>
                <p>１０位： {{$post->priority}}</p>
                <p>１１位： {{$post->deadline}}</p>
                <p>１２位： {{$post->status}}</p>
            </div>
        </div>
    </div>
@endsection


