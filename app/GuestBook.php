<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuestBook extends Model
{
    protected $fillable = ['nama', 'kelas', 'jurusan', 'email'];
}
