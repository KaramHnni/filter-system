<?php

namespace App\Http\Controllers\Admin\Cities;
use App\Models\city;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function delete($id){

        $city = City::findOrFail($id);

        $city->delete();

        return redirect(route('admin.cities'))->with(['deleted' => true]);


    }
}
