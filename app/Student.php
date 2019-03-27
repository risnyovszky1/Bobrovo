<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Student extends Authenticatable
{
    //
    use Notifiable;
    
    protected $guard = 'bobor';
    
    protected $fillable = ['first_name', 'last_name', 'code', 'teacher_id'];

    protected $hidden = [
       'remember_token',
    ];
}
