<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $table="admins";
    protected $guarded=[];
    public $timestamps = true ;
}
