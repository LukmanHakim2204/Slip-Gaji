<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Salarycomponent extends Model
{
    use HasFactory;

    protected $fillable = [
        'component_name',
        'type',
        'default_amount',
        'is_auto_calculated',
    ];

    protected $casts = [
        'default_amount' => 'decimal:2',
        'is_auto_calculated' => 'boolean',
    ];

    public function scopeAdd($query)
    {
        return $query->where('type', 'ADD');
    }

    public function scopeDeduct($query)
    {
        return $query->where('type', 'DEDUCT');
    }

    public function isAddition(): bool
    {
        return $this->type === 'ADD';
    }

    public function isDeduction(): bool
    {
        return $this->type === 'DEDUCT';
    }
}
