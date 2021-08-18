<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DVRelatedDocuments extends Model
{
    //Change table name
    protected $table = "dv_related_docs";
    //Change Primary Key
    protected $primaryKey = 'id';

    use HasFactory;

    public function category(){
        return $this->belongsToMany('App\Models\DVCategory');
    }

    public function documents(){
        return $this->belongsToMany('App\Models\DVDocuments');
    }
}
