<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'id_member', 'nama', 'nim', 'email', 'password'
    ];

    public $timestamps = false;

    // protected $primaryKey = 'id_member';
}
