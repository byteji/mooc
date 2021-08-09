<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certifications extends Model
{

    protected $fillable = [
        'id_users', 'id_subject_series', 'file_location' 
    ];
}