<?php

namespace App\Http\Controllers\Admin\Cities;
use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatusController extends Controller
{
    public function active($id){

        $city = City::findOrFail($id);
        $city->setActive();

        return redirect(route('admin.cities'))->with(['activated' => true
        ]);
    }
    public function inactive($id){

        $city = City::findOrFail($id);

        $city->setInactive();

        return redirect(route('admin.cities'))->with(['desactivated' => true
        ]);
    }
}
