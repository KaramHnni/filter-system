<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table ='cities';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    
    public function getFullNameAttribute(){
        return "مدينة $this->name" ;
    }
    public function getStatusNameAttribute(){
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

    public function areas(){
        return $this->hasMany('App\Models\Area','city_id','id');
    }

    public function instituts(){
        return $this->hasMany('App\Models\Institut','city_id','id');
    }
}
