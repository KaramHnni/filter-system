<?php

namespace App\Http\Controllers\Admin\Cities;
use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show(Request $request){

        $cities = City::filter($request);

        if($request->sort){
            if($request->sort =='latest'){
                $cities = $cities->orderBy('id','DESC')->get();
            }
            if($request->sort =='oldest'){
                $cities = $cities->orderBy('id','ASC')->get();
            }
            
        }
        if(!$request->sort){
            $cities = $cities->get();
        }
        


        
        return view('pages.admin.cities.show')->with([
            'cities' => $cities,
        ]
        );
    }
}
