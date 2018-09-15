<?php

namespace App\Http\Controllers\Admin\Cities;
use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function show(){
        return view('pages.admin.cities.create');
    }

    public function store(Request $request){
        $city = City::store($request);
        return redirect(route('admin.cities'))->with(['created' => true]);

    }
}
