<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectSeries extends Model
{
    //

    protected $fillable = [
        'id_subjects', 'subject_series_title', 'subject_series_status' , 'number_ students' , 'number_ students_max' 
    ];
}