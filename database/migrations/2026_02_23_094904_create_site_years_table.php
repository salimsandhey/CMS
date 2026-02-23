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
        Schema::create('site_years', function (Blueprint $table) {
            $table->id();
            $table->foreignId('site_id')->constrained()->cascadeOnDelete();
            $table->foreignId('year_id')->constrained()->cascadeOnDelete();
            $table->date('amc_start_date')->nullable();
            $table->date('amc_expiry_date')->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
            
            $table->unique(['site_id', 'year_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_years');
    }
};
