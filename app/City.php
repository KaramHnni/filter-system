<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    public function getFullNameAttribute(){
        return "مدينة $this->name" ;
    }
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
}
