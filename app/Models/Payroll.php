<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payroll extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'month',
        'year',
        'total_salary',
        'status',
    ];

    protected $casts = [
        'total_salary' => 'decimal:2',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function details()
    {
        return $this->hasMany(PayrollDetail::class);
    }

    public function totalAdditions()
    {
        return $this->details()->where('type', 'ADD')->sum('amount');
    }

    public function totalDeductions()
    {
        return $this->details()->where('type', 'DEDUCT')->sum('amount');
    }
}
