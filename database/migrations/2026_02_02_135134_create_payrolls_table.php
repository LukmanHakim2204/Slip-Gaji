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
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')
                ->constrained('employees')
                ->cascadeOnDelete();

            $table->integer('month');
            $table->integer('year');
            $table->decimal('total_salary', 15, 2)->default(0);
            $table->enum('status', ['DRAFT', 'APPROVED', 'PAID'])->default('DRAFT');
            $table->timestamps();

            $table->unique(['employee_id', 'month', 'year']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
