<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'full_name',
        'position',
        'department',
        'basic_salary',
        'employment_status',
        'is_active',
    ];

    protected $casts = [
        'basic_salary' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    public function attendances()
    {
        return $this->hasMany(Attendances::class);
    }

    public function payrolls()
    {
        return $this->hasMany(Payroll::class);
    }
}
