<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialPeriod extends Model
{
    use HasFactory;

    protected $fillable = [
        "is_active",
        "started_at",
        "ended_at",
        "status",
    ];

    public function credits()
    {
        return $this->hasMany(Credit::class, "financial_period_id");
    }
}
