<?php

namespace App\Http\Controllers\Admin\Cities\Areas;
use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show($id){
        $city = City::findOrFail($id);
        return view('pages.admin.cities.areas.show')->with([
            'city' => $city,
            
            
        ]);
    }
}
