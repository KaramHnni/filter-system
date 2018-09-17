<?php

namespace App\Http\Controllers\Admin\Cities;
use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show(Request $request){
        
        
        return view('pages.admin.cities.show')->with([
            'cities' => City::filter($request)->get(),
        ]
        );
    }
}
