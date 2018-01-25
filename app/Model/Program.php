<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    use SoftDeletes;
    protected $table = 'programs';
    public $timestamps = true;

//    public function days()
//    {
//        return $this->belongsToMany(Day::class);
//    }
}
