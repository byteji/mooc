<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectTestQuestions extends Model
{
    //

    protected $fillable = [
        'id_subject_tests', 'text', 'image' 
    ];
}