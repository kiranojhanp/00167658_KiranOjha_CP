<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    protected $primaryKey = 'clinic_id';
    protected $fillable = [
        'clinic_name','clinic_details'
    ];
}
