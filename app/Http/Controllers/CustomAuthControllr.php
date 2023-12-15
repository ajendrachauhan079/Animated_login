<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class CustomAuthControllr extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' =>'required|min:6'
        ]);
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email' ,$email)->first();
        if($user){

        if($user->password){
            if (Hash::check($password,$user->password)){
                    Auth::login($user);
                    return redirect()->route('revision.index');
            }
            $request->session()->flash('status', 'Incorrect password');
            return redirect()->route('custom.login');
        }

        }

    }

    public function customLogout(){
        if (Auth::check()){
            Auth::logout();
            return redirect()->route('login');
        }
    }
    
}
