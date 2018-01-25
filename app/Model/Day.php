<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Programs;

class Day extends Model
{
    protected $table = 'days';
    public $timestamps = false;

//    public function programs()
//    {
//        return $this->belongsToMany(Programs::class);
//    }
}
