<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Administrator extends Authenticatable
{
    protected $guard ='admin';
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table ='administrators';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


}
