<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersImages extends Model
{
    //
    protected $fillable = [
        'user_id', 'file_location'
    ];
}