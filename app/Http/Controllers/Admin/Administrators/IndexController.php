<?php

namespace App\Http\Controllers\Admin\Administrators;
use App\Models\Administrator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show(){
        

        return view('pages.admin.administrators.show')->with([
            'administrators' => Administrator::All(),
        ]
        );
    }
}
