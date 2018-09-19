<?php

namespace App\Http\Controllers\Admin\Degrees;
use App\Models\Degree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function delete($id){

        $degree = Degree::findOrFail($id);

        $degree->delete();

        return redirect(route('admin.degrees'))->with(['deleted' => true]);


    }
}
