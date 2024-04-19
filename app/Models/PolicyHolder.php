<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolicyHolder extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'policy_number',
        'plan_id'
    ];

    public $timestamps = false;
}
