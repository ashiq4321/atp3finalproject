<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    protected $table = "users";
    public $timestamps = false;
    protected $primaryKey = "username";
}
