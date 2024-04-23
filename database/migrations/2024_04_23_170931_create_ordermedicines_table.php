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
        Schema::create('ordermedicines', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('power');
            $table->string('amount');
            $table->string('quantity');
            $table->string('totalprice');
            $table->string('userid');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordermedicines');
    }
};
