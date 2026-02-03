<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attendances extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'attendance_date',
        'attendance_status',
        'check_in',
        'check_out',
        'overtime_hours',
        'late_minutes',
    ];

    protected $casts = [
        'attendance_date' => 'date',
        'overtime_hours' => 'integer',
        'late_minutes' => 'integer',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
