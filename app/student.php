<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable=[
        'name',
        'surname',
        'date_of_birth',
        'fiscal_code',
        'enrolment_date',
        'email',
        'registration_number'
    ];
}
