<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function signup(){
        return view('front-end.visitor.signup');
    }
}
