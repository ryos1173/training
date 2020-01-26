<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Body;
use App\Goal;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{   

    
     public function index(Request $request)
    {
        $body = Body::where("user_id",Auth::user()->id)->latest()->first();
        $goal = Goal::where("user_id",Auth::user()->id)->latest()->first();
        if($body->weight >= $goal->goal){
            return view('user.congrats', ["goal"=>$goal]);
        }else{
            return view('user.mypage',["body"=>$body],["goal"=>$goal]);
        }
    }

}  
