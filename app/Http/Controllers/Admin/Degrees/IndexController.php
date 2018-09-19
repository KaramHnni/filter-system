<?php

namespace App\Http\Controllers\Admin\Degrees;
use App\Models\Degree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show(Request $request){

        $degrees = Degree::filter($request);

        if($request->sort){
            if($request->sort =='latest'){
                $degrees = $degrees->orderBy('id','DESC')->get();
            }
            if($request->sort =='oldest'){
                $degrees = $degrees->orderBy('id','ASC')->get();
            }
            
        }
        if(!$request->sort){
            $degrees = $degrees->get();
        }
        


        
        return view('pages.admin.degrees.show')->with([
            'degrees' => $degrees,
        ]
        );
    }
}
