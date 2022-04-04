<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class skillsDashController extends Controller
{
    //
    public function skill(){
        return view('dashbord.skills');
    }
}
