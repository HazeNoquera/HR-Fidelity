<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class hr_controller extends Controller
{
    public function index(){
        return view("Home");
    }

function Login(){
    return view ('Login');
}

    function loginPost(Request $request){
        $request->validate([
            'Hr_Username' => 'required',
            'Hr_Password' => 'required'

        ]);


        $credentials = $request->only('Hr_Username','Hr_Password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('Home'))->with("sucess");
        }
        return redirect(route('Login'))->with("error","Login Failed");


    }
}
