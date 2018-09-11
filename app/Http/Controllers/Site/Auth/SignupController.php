<?php

namespace App\Http\Controllers\Site\Auth;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\UserDetails;
use App\City;
use App\Gender;
use App\Institut;
use App\Degree;
use App\Occupation;
use App\Speciality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SignupController extends Controller
{
    
    public function show(){

        return view('pages.site.auth.signup')->with([
            'cities' => City::all(),
            'genders' => Gender::all(),
            'instituts' => Institut::all(),
            'degrees' => Degree::all(),
            'occupations' => Occupation::all(),
            'specialities' => Speciality::all(),
        ]);
    }


    public function store(Request $request){

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->created_at=now();
        $user->save();

        $currentuser = User::orderBy('created_at', 'desc')->first();

        $user_details = new UserDetails;

        $user_details->user_id = $currentuser->id;
        $user_details->first_name = $request->first;
        $user_details->last_name = $request->last;
        $user_details->date_of_birth = $request->date_of_birth;
        $user_details->area_id = $request->place_of_birth;
        $user_details->gender_id = $request->gender;
        $user_details->institut_id = $request->institut;
        $user_details->degree_id = $request->degree;
        $user_details->occupation_id = $request->occupation;
        $user_details->option_id = $request->option;
        $user_details->created_at = now();
        $user_details->save();



    }



}
