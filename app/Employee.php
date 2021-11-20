<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'lname', 'fname', 'position', 'salary'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}

