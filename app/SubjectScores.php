<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectScores extends Model
{
    //

    protected $fillable = [
        'id_subject_series', 'score', 'sender' , 'comments' 
    ];
}