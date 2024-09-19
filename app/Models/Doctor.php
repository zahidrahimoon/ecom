<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    // If the table name doesn't follow Laravel's convention (plural), you can specify it:
    // protected $table = 'doctors';

    protected $fillable = ['name', 'specialty', 'image'];
}
