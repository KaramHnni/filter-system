<?php

namespace App\Http\Controllers\Site\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SignupController extends Controller
{
    
    public function show(){

        return view('pages.site.auth.signup.blade.php');
    }



}