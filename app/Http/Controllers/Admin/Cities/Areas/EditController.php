<?php

namespace App\Http\Controllers\Admin\Cities\Areas;
use App\Models\Area;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function show($city_id, $area_id){

        return view('pages.admin.cities.areas.edit')->with([
            'area' => Area::findorFail($area_id),
        ]);
        }

        public function update(Request $request, $city_id ,$area_id){

            $area = Area::findOrFail($area_id);
            $area->updateDetails($request);
            return redirect(route('admin.cities.areas' , $city_id))->with(['created ' => true]);
    
            }
}
