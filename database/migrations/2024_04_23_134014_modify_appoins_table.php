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
        Schema::table('appoins', function (Blueprint $table) {
            $table->string('patient_id')->nullable();
            $table->string('doctor_id')->nullable();
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appoins', function (Blueprint $table) {
            $table->dropColumn('patient_id');
            $table->dropColumn('doctor_id');
            //
        });
    }
};
