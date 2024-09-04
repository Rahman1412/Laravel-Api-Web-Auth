<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = request(['email', 'password']);
        if(Auth::attempt($credentials)){
            return redirect("home");
        }
    }

    public function logout(){
        Auth::logout();
        return redirect("/");
    }
}
