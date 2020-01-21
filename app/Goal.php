<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'goal' => 'required',
        );
}
