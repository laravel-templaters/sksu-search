<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisbursementVoucher extends Model
{
    protected $table = "disbursement_vouchers";
    //Change Primary Key
    protected $primaryKey = 'id';
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function mop(){
        return $this->hasOne('App\Models\ModeOfPayment');
    }

    public function receipt(){
        return $this->hasOne('App\Models\Receipt');
    }

    public function dv_type(){
        return $this->hasOne('App\Models\DVType');
    }

    public function document_scheme(){
        return $this->hasOne('App\Models\DocumentScheme');
    }

    public function fund_cluster(){
        return $this->hasOne('App\Models\FundCluster');
    }

    public function status(){
        return $this->hasOne('App\Models\Status');
    }

    public function note(){
        return $this->hasMany('App\Models\Note');
    }

    public function accounting_entry(){
        return $this->hasOne('App\Models\AccountingEntry');
    }


}
