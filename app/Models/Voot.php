<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voot extends Model
{
    protected $fillable = ['president', 'vice_president', 'secretary', 'treasurer', 'joint_secretary', 'organising_secretary', 'office_secretary', 'legal_social_ethics_secretary', 'broadcasting_media_secretary', 'education_literature_secretary', 'sports_culture_secretary', 'publishing_secretary','hosting_secretary', 'assistant_organising_secretary', 'assistant_treasurer', 'executive_member'];

    // Ensure JSON casting for arrays
    protected $casts = [
        'president' => 'array',
        'vice_president' => 'array',
        'secretary' => 'array',
        'treasurer' => 'array',
        'joint_secretary' => 'array',
        'organising_secretary' => 'array',
        'office_secretary' => 'array',
        'legal_social_ethics_secretary' => 'array',
        'broadcasting_media_secretary' => 'array',
        'education_literature_secretary' => 'array',
        'sports_culture_secretary' => 'array',
        'publishing_secretary' => 'array',
        'hosting_secretary' => 'array',
        'assistant_organising_secretary' => 'array',
        'assistant_treasurer' => 'array',
        'executive_member' => 'array',
    ];
}
