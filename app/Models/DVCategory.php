<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DVCategory extends Model
{

    //Change table name
    protected $table = "dv_category";
    //Change Primary Key
    protected $primaryKey = 'id';

    use HasFactory;

    public function type(){
        return $this->belongsTo('App\Models\DVType');
    }

    public function relatedDocuments(){
        return $this->hasOne('App\Models\DVRelatedDocuments');
    }
}
