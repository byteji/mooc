<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    //

    protected $fillable = [
        'subject_title', 'subject_description_1', 'subject_description_2' , 'subject_description_3' , 'subject_image' 
    ];
}