<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'skills';
    protected $fillable = [
        'first_name',
        'last_name',
        'title',
        'bio',
        'email',
        'location'

    ];
}
