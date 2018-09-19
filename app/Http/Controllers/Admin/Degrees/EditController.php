<?php

namespace App\Http\Controllers\Admin\Degrees;
use App\Models\Degree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function show($id){
        $degree = Degree::findOrFail($id);
        return view('pages.admin.degrees.edit')->with([
            'degree' => $degree,
            ]);

    }
    public function update(Request $request, $id){

        $degree = Degree::findOrFail($id);
        
        $degree->updateDetails($request);

        return redirect(route('admin.degrees'))->with(['updated' => true]);

    }
}
