<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table ='degrees';
    
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

    public static function filter($request){
        $degrees = new self;
        $degrees = $degrees->filterByStatus($request);
        if($request->keyword){
        $keyword = $request->keyword; 
        $degrees = $degrees->where(function($query) use ($keyword){
            $query->where('abbreviation','Like','%' . $keyword . '%');
            $query->orWhere('name','Like','%' . $keyword . '%');
        });
    }
            return $degrees;
    
    
    }

    public function filterByStatus($request){
        $degrees = $this;
        if($request->status){
        if($request->status == 'active'){
            $degrees = $degrees->where('status',1);
        }
        if($request->status == "inactive"){
            $degrees = $degrees->where('status',0);
        }
    }
        return $degrees;
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
        $degree = new self;
        $degree->name = $request->name;
        $degree->abbreviation = $request->abbreviation;
        $degree->status = $request->status;
        $degree->created_at = now();
        $degree->updated_at = now();
        $degree->save();
    }

    public function updateDetails($request){
        $this->name = $request->name;
        $this->abbreviation = $request->abbreviation;
        $this->updated_at = now();
        $this->save();
    }

    public function details(){
        return $this->hasMany('\App\Models\UserDetails','degree_id','id');
    }

    
}
