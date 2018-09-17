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

    public static function filter($request){
        $cities = new self;
        $cities = $cities->filterByStatus($request);
        if($request->keyword){
        $keyword = $request->keyword; 
        $cities = $cities->where(function($query) use ($keyword){
            $query->where('slug','Like','%' . $keyword . '%');
            $query->orWhere('name','Like','%' . $keyword . '%');
        });
    }
    return $cities;
    }

    public function filterByStatus($request){
        $cities = $this;
        if($request->status){
        if($request->status == 'active'){
            $cities = $cities->where('status',1);
        }
        if($request->status == "inactive"){
            $cities = $cities->where('status',0);
        }
    }
        return $cities;
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

    public static function  store($request){
        $city = new self;
        $city->name = $request->name;
        $city->slug = $request->slug;
        $city->status = $request->status;
        $city->created_at = now();
        $city->updated_at = now();
        $city->save();
    }

    public function updateDetails($request){
        $this->name = $request->name;
        $this->slug = $request->slug;
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
