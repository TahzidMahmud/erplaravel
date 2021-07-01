<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainAccount extends Model
{
    protected $fillable = [
        "bizid", "acc", "acc_desc", "acc_type",
        "acc_use", "acc_source", "level1", "level2", "level3", "active",
        "flag", "date", "insert_by", "update_by"
    ];

}
