<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{

    
    public function area(){
        return $this->hasOne('\App\Area','id','area_id');
    }

    public function gender(){
        return $this->hasOne('\App\Gender','id','gender_id');
    }

    
}
