<?php

namespace App\Http\Controllers\Admin\Cities\Areas;
use App\Models\City;
use App\Models\Area;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function show($city_id){
        
        $city = City::findOrFail($city_id);
        return view('pages.admin.cities.areas.create')->with([
            'city' => $city,
        ]);}

    public function store(Request $request, $city_id){

        $area = Area::store($request);
        return redirect(route('admin.cities.areas' , $city_id))->with(['created ' => true]);

    }
}
