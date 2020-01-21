<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Body;
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
        $posts = Body::all();
        return view('user.profile.index', ['posts' => $posts]);
    }

    
    public function edit(Request $request)
    {
        // $body = Body::find($request->id);
        // if (empty($body)) {
        // abort(404);    
        // }
        return view('user.profile.edit');
    }
    
    public function update()
    {
        // $this->validate($request, Body::$rules);
        // $body = Body::find($request->id);
        // $body_form = $request->all();
        // unset($body_form['_token']);
        // $body->fill($body_form)->save();
        
    return redirect('user/mypage');
    }
}
