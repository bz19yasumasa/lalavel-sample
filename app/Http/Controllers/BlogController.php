<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home() {
        return view('blog/home');
    }

    public function post1() {
        return view('blog/post1');
    }

    public function post2() {
        return view('blog/post2');
    }

    public function data() {
        return view('blog/data');
    }
}
