<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Body extends Model
{
 protected $guarded = array('id');

    public static $rules = array(
        'weight' => 'required',
        'bfp' => 'required',
        'memo' => 'required',
        );
    
}
