<?php

namespace App\Http\Controllers\Admin\Cities\Areas;
use App\Models\Area;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatusController extends Controller
{
    public function active($city_id , $area_id){

        $area = Area::findOrFail($area_id);
        $area->setActive();

        return redirect(route('admin.cities.areas' , $city_id))->with(['activated' => true
        ]);
    }
    public function inactive($city_id , $area_id){

        $area = Area::findOrFail($area_id);

        $area->setInactive();

        return redirect(route('admin.cities.areas' , $city_id ))->with(['desactivated' => true
        ]);
    }
}
