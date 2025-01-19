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
        Schema::create('foodRoutines', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('type');
            $table->string('name');
            $table->string('desc');
            $table->string('photo', 300);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_routines');
    }
};
