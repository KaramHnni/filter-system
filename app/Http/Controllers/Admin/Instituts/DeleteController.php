<?php

namespace App\Http\Controllers\Admin\Instituts;
use App\Models\Institut;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function delete($id){

        $institut = Institut::findOrFail($id);

        $institut->delete();

        return redirect(route('admin.instituts'))->with(['deleted' => true]);


    }
}
