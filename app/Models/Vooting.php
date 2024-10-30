<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vooting extends Model
{
    protected $fillable = ['president', 'vice_president', 'secretary'];

    // Ensure JSON casting for arrays
    protected $casts = [
        'president' => 'array',
        'vice_president' => 'array',
        'secretary' => 'array',
    ];
}
