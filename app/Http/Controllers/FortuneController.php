<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bloodtype;
use App\Sign;
use Illuminate\Support\Facades\Auth;

class FortuneController extends Controller{

    public function index() {
        return view('fortune/index');
    }

    public function result(Request $request) {

        $sign = $request->sign;

        $result_blood=[11];


        $sign_all = ["Aries","Taurus","Gemini","Cancer","Leo","Virgo","Libra","Scopio","Sagittarious","Capricorn","Aquarius","Pisces"];

        $date = Sign::get($date);

        if(isset($date)){

            $data_result = Sign::get();
            $result_blood[$i];

        }else{
            $date = date("y/m/d");

            for($i=0; $i < count($sign_all); $i++){
                $result_sign[$i] = mt_rand()*100;
            }

            $sort_result = rsort($result_sign);




                Sign::create([
                    'date'=> $date,

                ]);

                    Sign::create([
                        $sign_all[$i] => '$result_sign[$i]',
                    ]);
            }
        }
    }


/*
        $sign = $request->sign;
        $bloodtype = $request->bloodtype;


        if(isset($sign)){

            if(isset($bloodtype)){

                $result = "1";
            }else{
                $result = "2";

            }
        }else{

            $result = "3";
        }


        return view("fortune/result",compact("result"));

*/
