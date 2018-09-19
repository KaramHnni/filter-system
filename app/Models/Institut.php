<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institut extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table ='instituts';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


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
    public static function filter($request){
        $instituts = new self;
        $instituts = $instituts->filterByStatus($request);
        if($request->keyword){
        $keyword = $request->keyword; 
        $instituts = $instituts->where(function($query) use ($keyword){
            $query->where('slug','Like','%' . $keyword . '%');
            $query->orWhere('name','Like','%' . $keyword . '%');
        });
    }
            return $instituts;
    
    
    }

    public function filterByStatus($request){
        $instituts = $this;
        if($request->status){
        if($request->status == 'active'){
            $instituts = $instituts->where('status',1);
        }
        if($request->status == "inactive"){
            $instituts = $instituts->where('status',0);
        }
    }
        return $instituts;
    }

    public static function  store($request){
        $institut = new self;
        $institut->name = $request->name;
        $institut->slug = $request->slug;
        $institut->city_id = $request->city_id;
        $institut->status = $request->status;
        $institut->created_at = now();
        $institut->updated_at = now();
        $institut->save();
    }

    public function updateDetails($request){
        $this->name = $request->name;
        $this->slug = $request->slug;
        $this->updated_at = now();
        $this->save();
    }
    
    public function city(){
        return $this->hasOne('App\Models\City','id','city_id');
    }

    public function details(){
        return $this->hasMany('\App\Models\UserDetails','institut_id','id');
    }
}
