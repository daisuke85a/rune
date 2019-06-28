<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HelpItem extends Model
{
    //
    protected $fillable = [
        'name',
        'rune',
        'user_id'
    ];
}
