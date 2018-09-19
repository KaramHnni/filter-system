<?php

namespace App\Http\Controllers\Admin\Instituts;
use App\Models\Institut;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show(Request $request){

        $instituts = Institut::filter($request);

        if($request->sort){
            if($request->sort =='latest'){
                $instituts = $instituts->orderBy('id','DESC')->get();
            }
            if($request->sort =='oldest'){
                $instituts = $instituts->orderBy('id','ASC')->get();
            }
            
        }
        if(!$request->sort){
            $instituts = $instituts->get();
        }
        


        
        return view('pages.admin.instituts.show')->with([
            'instituts' => $instituts,
        ]
        );
    }
}
