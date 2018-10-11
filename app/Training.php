<?php

namespace Training_Management_System;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{	
        protected $fillable = [
        'titulli', 'pershkrimi', 'akredituar'
    ];
}
