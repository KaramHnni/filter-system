<?php

namespace App\Http\Controllers\Admin\Cities;
use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function show($id){
        $city = City::findOrFail($id);
        return view('pages.admin.cities.edit')->with([
            'city' => $city,
            ]);

    }
    public function update(Request $request, $id){

        $city = City::findOrFail($id);
        
        $city->updateDetails($request);

        return redirect(route('admin.cities'))->with(['updated' => true]);

    }
}
