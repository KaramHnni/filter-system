<?php

namespace App\Http\Controllers\Admin\Instituts;
use App\Models\Institut;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function show($id){
        $institut = Institut::findOrFail($id);
        return view('pages.admin.instituts.edit')->with([
            'institut' => $institut,
            ]);

    }
    public function update(Request $request, $id){

        $institut = Institut::findOrFail($id);
        
        $institut->updateDetails($request);

        return redirect(route('admin.instituts'))->with(['updated' => true]);

    }
}
