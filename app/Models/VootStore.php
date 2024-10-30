<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VootStore extends Model
{
    protected $fillable = ['president', 'vice_president', 'secretary', 'treasurer', 'firstjointsecretary', 'secondjointsecretary', 'thirdjointsecretary', 'fourthjointsecretary', 'organisingsecretary', 'officesecretary', 'legalsocialsecretary', 'broadcastingsecretary','educationsecretary', 'sportsculturalsecretary', 'publishingsecretary', 'hostingsecretary', 'assistantorganisingecretary', 'assistanttreasurer', 'firstexecutivemember', 'secondexecutivemember', 'thirdexecutivemember', 'fourthexecutivemember'];

    // Ensure JSON casting for arrays
    protected $casts = [
        'president' => 'array',
        'vice_president' => 'array',
        'secretary' => 'array',
        'treasurer' => 'array',
        'firstjointsecretary' => 'array',
        'secondjointsecretary' => 'array',
        'thirdjointsecretary' => 'array',
        'fourthjointsecretary' => 'array',
        'organisingsecretary' => 'array',
        'officesecretary' => 'array',
        'legalsocialsecretary' => 'array',
        'broadcastingsecretary' => 'array',
        'educationsecretary' => 'array',
        'sportsculturalsecretary' => 'array',
        'publishingsecretary' => 'array',
        'hostingsecretary' => 'array',
        'assistantorganisingecretary' => 'array',
        'assistanttreasurer' => 'array',
        'firstexecutivemember' => 'array',
        'secondexecutivemember' => 'array',
        'thirdexecutivemember' => 'array',
        'fourthexecutivemember' => 'array',
    ];
}
