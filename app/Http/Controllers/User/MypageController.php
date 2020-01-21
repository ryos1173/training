<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Body;
class MypageController extends Controller
{   

    
     public function index()
    {
        $body = Body::find(1);
        return view('user.mypage',["body"=>$body]);
    }
    
     
}  
