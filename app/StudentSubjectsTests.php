<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentSubjectsTests extends Model
{
    //

    protected $fillable = [
        'id_users', 'id_subject_tests', 'users_subjects_test_status' 
    ];
}