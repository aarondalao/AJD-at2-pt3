<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;



class Collector extends Model
{
    use HasFactory;

    #this is the name of the collection "table" for Mongodb
    protected $collection = 'collectors';

    protected $fillable=[
        'given_name',
        'family_name',
        'cars',
    ];

    /*
     *
     *  the attributes that should be hidden for serialization
     * */
    protected $casts = [];


    /*
     *
     * The attributes that  should be casted.
     *
     * */
    protected $hidden=[];
}
