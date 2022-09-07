<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crono extends Model
{

    protected $fillable = [
        'name',
        'description',
        'cronovalue',
        'FK_user_id'
    ];
    use HasFactory;
}
