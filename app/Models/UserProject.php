<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserProject extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'UserProject';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
