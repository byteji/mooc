<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectTextbooks extends Model
{
    //

    protected $fillable = [
        'id_subject_chapters', 'title', 'file_location' 
    ];
}