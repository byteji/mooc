<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersSubjects extends Model
{
    //
    
    protected $fillable = [
        'id_users', 'id_subject_series', 'users_subjects_type', 'users_subjects_status' 
    ];
}