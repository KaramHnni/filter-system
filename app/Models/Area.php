<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table ='areas';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    
    public function getFullNameAttribute(){
        return "بلدية $this->name" ;
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

    public static function store($request){
        $area = new self;
        $area->name = $request->name;
        $area->slug = $request->slug;
        $area->status = $request->status;
        $area->city_id = $request->city_id;
        $area->created_at = now();
        $area->save();
    }

    public function updateDetails($request){
        $this->name = $request->name;
        $this->slug = $request->slug;
        $this->updated_at = now();
        $this->save();
    }

    public function city(){
       return $this->hasOne('\App\Models\City','id','city_id');

    }
    public function details(){
        return $this->hasMany('\App\Models\UserDetails','area_id','id');
    }
}

