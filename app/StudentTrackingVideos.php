<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentTrackingVideos extends Model
{
    //

    protected $fillable = [
        'id_subject_videos', 'file_location', 'status_video' 
    ];
}