<?php

namespace App\Http\Controllers\Admin\Degrees;
use App\Models\Degree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatusController extends Controller
{
    public function active($id){

        $degree = Degree::findOrFail($id);
        $degree->setActive();

        return redirect(route('admin.degrees'))->with(['activated' => true
        ]);
    }
    public function inactive($id){

        $degree = Degree::findOrFail($id);

        $degree->setInactive();

        return redirect(route('admin.degrees'))->with(['desactivated' => true
        ]);
    }
}
