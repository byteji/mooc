<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectTests extends Model
{
    //

    protected $fillable = [
        'id_subject_chapters', 'title', 'description' 
    ];
}