<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
    function login(){
        return view('login');
    }
    
        function loginPost(Request $request){
            $request->validate([
                'Hr_Username' => 'required',
                'Hr_Password' => 'required'
    
            ]);
    
    
            $credentials = $request->only('Hr_Username','Hr_Password');
            
            if(Auth::attempt($credentials)){
                return redirect()->intended(route('Home'));
            }
            return redirect(route('login'))->with("error","Login Failed");
    
    
        }
    } 
    


