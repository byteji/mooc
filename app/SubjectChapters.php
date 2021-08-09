<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectChapters extends Model
{
    //

    protected $fillable = [
        'id_subjects', 'subject_chapter_title', 'subject_chapter_type' 
    ];
}