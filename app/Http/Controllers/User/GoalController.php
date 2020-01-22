<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Goal;
use Illuminate\Support\Facades\Auth;

class GoalController extends Controller
{
    public function add()
    {
        return view('user.profile.goal');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Goal::$rules);
        $goal = new Goal;
        $form = $request->all();
        unset($form['_token']);
        $goal->fill($form);
        $goal->user_id = Auth::user()->id;
        $goal->save();
        
        return redirect('user/profile/create');
    }
}
