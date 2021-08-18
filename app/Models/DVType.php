<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DVType extends Model
{

    //Change table name
    protected $table = "dv_type";
    //Change Primary Key
    protected $primaryKey = 'id';
    use HasFactory;

    public function category(){
        return $this->hasMany('App\Models\DVCategory');
    }
}
