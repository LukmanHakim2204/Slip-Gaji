<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('salaryrules', function (Blueprint $table) {
            $table->id();
            $table->integer('monthly_working_days');
            $table->decimal('leave_deduction_percent', 5, 2);
            $table->decimal('absence_deduction_percent', 5, 2);
            $table->decimal('late_deduction_amount', 15, 2);
            $table->decimal('overtime_rate_per_hour', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salaryrules');
    }
};
