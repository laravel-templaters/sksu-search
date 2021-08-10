<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
      //Change table name
      protected $table = "info";
      //Change Primary Key
      protected $primaryKey = 'id';
    use HasFactory;
}
