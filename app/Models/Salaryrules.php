<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Salaryrules extends Model
{

    use HasFactory;

    protected $fillable = [
        'monthly_working_days',
        'leave_deduction_percent',
        'absence_deduction_percent',
        'late_deduction_amount',
        'overtime_rate_per_hour',
    ];

    protected $casts = [
        'leave_deduction_percent' => 'decimal:2',
        'absence_deduction_percent' => 'decimal:2',
        'late_deduction_amount' => 'decimal:2',
        'overtime_rate_per_hour' => 'decimal:2',
    ];
}
