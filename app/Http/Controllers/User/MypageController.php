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
        // $body = Body::find(1);
        $body = Body::where("user_id",Auth::user()->id)->first();

        return view('user.mypage',["body"=>$body]);
    }
    
     
}  
