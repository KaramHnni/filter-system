<?php

namespace App\Http\Controllers\Admin\Users;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show(){
        

        return view('pages.admin.users.show')->with([
            'users' => User::All(),
        ]
        );
    }
}
