<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmiController extends Controller
{
    public function index() {
        return view('bmi/index');
    }

    public function calc(Request $request) {


        $height = $request->height/100;
        $weight = $request->weight;

        $bmi = round($weight / $height **2,2);

        if($bmi <18.5) {
            $bodytype = "低体重";
        } else if($bmi >=25) {
            $bodytype = "肥満";
        } else {
            $bodytype = "普通体重";
        }


        return view('bmi/calc',compact('bmi','bodytype'));
    }


}
