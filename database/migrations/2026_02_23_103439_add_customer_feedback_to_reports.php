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
        Schema::table('validation_reports', function (Blueprint $table) {
            $table->text('customer_feedback')->nullable();
        });

        Schema::table('test_reports', function (Blueprint $table) {
            $table->text('customer_feedback')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('validation_reports', function (Blueprint $table) {
            $table->dropColumn('customer_feedback');
        });

        Schema::table('test_reports', function (Blueprint $table) {
            $table->dropColumn('customer_feedback');
        });
    }
};
