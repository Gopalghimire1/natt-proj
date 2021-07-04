<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard(){
        return view('back.index');
    }
     public function login(Request $request){
        if($request->getMethod()=="POST"){

            $request->validate([
                'email' => 'required',
                'password' => 'required|string',

            ]);
            $email=$request->email;
            $password=$request->password;
            if (Auth::attempt(['email' => $email, 'password' => $password], true)) {
                    return redirect()->route(Auth::user()->getRole().'.dashboard');
            }else{
                return redirect()->back()->withErrors('Credential do not match');
            }
        }else{
            return view('back.adminlogin');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
