<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Visitor extends Model
{
    use HasFactory;
    public static $visitor;

    public static function saveInfo($request){
        self::$visitor = new Visitor();
        self::$visitor->username = $request->username;
        self::$visitor->email = $request->email;
        self::$visitor->phone = $request->phone;
        self::$visitor->password = bcrypt($request->password);
        self::$visitor->save();
    }
    public static function loginCheckVisitor($request){
        self::$visitor = Visitor::where('email',$request->email)->first();
        if (self::$visitor){
            if (password_verify($request->password,self::$visitor->password)){
                    Session::put('visitorId',self::$visitor->id);
                    Session::put('visitoremail',self::$visitor->email);
                    Session::put('visitorname',self::$visitor->username);
            }else{
                return back()->with('message','Please Use valid password.');
            }
        }else{
            return back()->with('message','Please Use Valid Email.');
        }
    }
}
