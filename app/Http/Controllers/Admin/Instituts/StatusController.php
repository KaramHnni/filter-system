<?php

namespace App\Http\Controllers\Admin\Instituts;
use App\Models\Institut;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatusController extends Controller
{
    public function active($id){

        $institut = Institut::findOrFail($id);
        $institut->setActive();

        return redirect(route('admin.instituts'))->with(['activated' => true
        ]);
    }
    public function inactive($id){

        $institut = Institut::findOrFail($id);

        $institut->setInactive();

        return redirect(route('admin.instituts'))->with(['desactivated' => true
        ]);
    }
}
