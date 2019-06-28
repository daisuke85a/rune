<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RuneRate extends Model
{
    //
    protected $fillable = [
        'mode',
        'rate',
        'user_id'
    ];
}
