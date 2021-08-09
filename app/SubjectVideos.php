<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectVideos extends Model
{
    //
    protected $fillable = [
        'id_subject_chapters', 'title', 'location' 
    ];
}
