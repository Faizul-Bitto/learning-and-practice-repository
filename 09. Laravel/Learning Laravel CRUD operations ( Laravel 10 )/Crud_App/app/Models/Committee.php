<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    use HasFactory;

    protected $table = 'committee';
    protected $primaryKey = 'id';

    protected $fillable = 
    [
        'name',
        'email',
        'phone',
        'designation'
    ];
}
