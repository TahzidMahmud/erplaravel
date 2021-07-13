<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubAccount extends Model
{
    protected $fillable = [
        "bizid", "acc","acc_sub", "acc_desc","active",
        "flag", "insert_by", "update_by"
    ];
    public function main_account(){
        return $this->belongsTo('App\MainAccount', 'acc', 'id');
    }

}
