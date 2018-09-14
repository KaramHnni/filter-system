<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SignoutController extends Controller
{
    public function auth(){
        auth('admin')->logout();
        request()->session()->flush();
        return redirect()->route('admin.login');
    }
}
