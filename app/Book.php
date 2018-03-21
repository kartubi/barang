<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name', 'cover'];

    public function test(){

        //gue relasi ke table a
        //gue relasinya HASONE

    }
}
