<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function changePass(Request $request){
        $user = User::where('id',Auth::user()->id)->first();
        if($user->password == bcrypt($request->oldpass)){

            $user->password = bcrypt($request->password);
            $user->save();
            return redirect()->back()->with('error','Password chanage successfully !');
        }else{
            return redirect()->back()->with('error','Old password does not match !');
        }
    }
}
