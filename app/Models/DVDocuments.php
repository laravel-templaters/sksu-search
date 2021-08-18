<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DVDocuments extends Model
{
     //Change table name
     protected $table = "dv_documents";
     //Change Primary Key
     protected $primaryKey = 'id';

    use HasFactory;

    public function relatedDocuments(){
        return $this->hasOne('App\Models\DVRelatedDocuments');
    }
}
