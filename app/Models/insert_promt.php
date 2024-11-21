<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Composite extends Model
{
    use HasFactory;

    protected $table = 'composites'; // Explicit table name
    protected $fillable = ['title', 'description']; // Fields allowed for mass assignment
}
