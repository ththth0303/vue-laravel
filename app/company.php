<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
     protected $fillable = ['name', 'address', 'website', 'email'];
}
