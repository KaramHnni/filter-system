<?php

namespace App\Http\Controllers\Admin\Degrees;
use App\Models\Degree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function show(){
        return view('pages.admin.degrees.create');
    }

    public function store(Request $request){
        $degree = Degree::store($request);
        return redirect(route('admin.degrees'))->with(['created' => true]);

    }
}
