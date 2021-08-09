<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectChats extends Model
{
    //

    protected $fillable = [
        'id_subject_series', 'subject_chat_title', 'subject_chat_sender' , 'subject_chat_type' , 'subject_chat_ref' , 'subject_chat_text' 
    ];
}