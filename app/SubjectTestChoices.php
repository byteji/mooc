<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectTestChoices extends Model
{
    //

    protected $fillable = [
        'id_subject_test_questions', 'text', 'Answer' 
    ];
}