<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        return view('profile/index');
    }

    public function hobby() {
        return view('profile/hobby');
    }
}
