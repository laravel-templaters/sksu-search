<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    //Change table name
 protected $table = "departments";
 //Change Primary Key
 protected $primaryKey = 'id';


    use HasFactory;

    public function user(){
        return $this->hasMany('App\Models\User');
    }
}
