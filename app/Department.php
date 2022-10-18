<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    // nomi dei campi per assegnazione di massa
    protected $fillable=[
        'name',
        'website',
        'email',
        'phone',
        'head_of_department',
        'address',
    ];
}
