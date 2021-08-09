<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CertificationTemplates extends Model
{
    //
    protected $fillable = [
        'certification_template_bg', 'certification_template_description_1', 'certification_template_description_2' , 'certification_template_provider_1' , 'certification_template_provider_2'  
    ];
}