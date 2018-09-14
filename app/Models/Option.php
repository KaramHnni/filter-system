<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table ='options';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    
    public function getStatusAttribute(){
        if($this->status == 0){
            return "غير مفعل";
        }
        if($this->status == 1){
            return "مفعل";
        }
    }

    public function active(){
        return self::where('status',1);
    }

    public function setActive(){
        $this->status = 1;
        $this->updated_at = now();
        $this->save();
    }

    public function setInactive(){
        $this->status = 0;
        $this->updated_at = now();
        $this->save();
    }

    public function speciality(){
        return $this->hasOne('\App\Models\Speciality','id','speciality_id');
    }

    public function details(){
        return $this->hasMany('\App\Models\UserDetails','option_id','id');
    }
}
