<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function add(){
        return view('admin.new.create');
    }
    
    public function create(Request $request)
    {
        return redirect('admin/new/create');
    }
}
