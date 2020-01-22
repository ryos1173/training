<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Body;
use App\Goal;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function add()
    {
        return view('user.profile.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Body::$rules);
        $body = new Body;
        $form = $request->all();
        if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $body->image_path = basename($path);
        } else {
          $body->image_path = null;
        }
        unset($form['_token']);
        unset($form['image']);
        $body->fill($form);
        $body->user_id = Auth::user()->id;
                // dd($body);

        $body->save();
        
        return redirect('user/mypage');
    }
    
     public function index(Request $request)
    {
        $posts = Body::where("user_id",Auth::user()->id)->get();
        return view('user.profile.index', ['posts' => $posts]);
    }

    public function delete(Request $request)
    {
        $body = Body::find($request->id);
        $body->delete();
        return redirect('user/profile/index');
    }
}
