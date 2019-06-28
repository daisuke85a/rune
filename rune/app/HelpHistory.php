<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HelpHistory extends Model
{
    //
    protected $fillable = [
        'name',
        'rune',
        'user_id'
    ];
}
