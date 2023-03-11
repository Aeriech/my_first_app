<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Userdata extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'userdatas';

    // Define the columns that can be mass assigned
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    // Define the columns that should be hidden from JSON and array output
    protected $hidden = [
        'password',
        'remember_token',
    ];
}