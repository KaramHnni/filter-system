<?php

namespace App\Http\Controllers\Site\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function show(){
        return view('pages.site.auth.login');
    }


    public function auth(Request $request){
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended('user/dashboard');
        }
        else{
            return redirect(route('login'))->with(['credentials' => true]);
        }
    }
}
