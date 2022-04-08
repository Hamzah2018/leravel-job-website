<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobsController extends Controller
{
    //
    public function viewJob(){
        return view('pages.job');
    }
}

