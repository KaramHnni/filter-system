<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table ='user_details';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    
    
    public function area(){
        return $this->hasOne('\App\Models\Area','id','area_id');
    }

    public function gender(){
        return $this->hasOne('\App\Models\Gender','id','gender_id');
    }

    public function institut(){
        return $this->hasOne('\App\Models\Institut','id','institut_id');
    }

    public function degree(){
        return $this->hasOne('\App\Models\Degree','id','degree_id');
    }

    public function occupation(){
        return $this->hasOne('\App\Models\Occupation','id','occupation_id');
    }

    public function option(){
        return $this->hasOne('\App\Models\Option','id','option_id');
    }
    
}
