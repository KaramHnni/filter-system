<?php

namespace App\Http\Controllers\Admin\Cities\Areas;
use App\Models\Area;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function delete($city_id , $area_id){

        $area = Area::findOrFail($area_id);

        $area->delete();

        return redirect(route('admin.cities.areas' , $city_id ))->with(['deleted' => true]);


    }
}
