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
        Schema::create('validation_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('site_year_id')->unique()->constrained()->cascadeOnDelete();
            $table->string('report_title');
            $table->date('report_date')->nullable();
            $table->string('file_path');
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validation_reports');
    }
};
