<?php

namespace App\Http\Controllers\Admin\Instituts;
use App\Models\Institut;
use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function show(){
        return view('pages.admin.instituts.create')->with([
            'cities'=>City::all(),
            ]);
    }

    public function store(Request $request){
        $institut =Institut::store($request);
        return redirect(route('admin.instituts'))->with(['created' => true]);

    }
}
