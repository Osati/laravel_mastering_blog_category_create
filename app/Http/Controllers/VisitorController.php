<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Session;

class VisitorController extends Controller
{
    public function signup(){
        return view('front-end.visitor.signup');
    }
    public function signupStore(Request $request){
        Visitor::saveInfo($request);
        return redirect(route('home'));
    }
    public function login(){
        return view('front-end.visitor.signin');
    }
    public function loginCheck(Request $request){
        Visitor::loginCheckVisitor($request);
        return redirect(route('home'));
    }
    public function logOut(){
        Session::forget('visitorId');
        Session::forget('visitoremail');
        Session::forget('visitorname');
        return back();
    }
}
