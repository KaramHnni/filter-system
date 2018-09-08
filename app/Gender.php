<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    public function getSymbolAttribute(){
        if($this->name == "ذكر"){
            return "M" ;
        }
        if($this->name == "انثى"){
            return "F" ;
        }
        
    }
}
