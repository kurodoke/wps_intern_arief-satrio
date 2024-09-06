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
        Schema::create('subordinates', function (Blueprint $table) {
            $table->unsignedBigInteger('upper');
            $table->unsignedBigInteger('lower');
            $table->foreign('upper')->references('id')->on('employees');
            $table->foreign('lower')->references('id')->on('employees');
            $table->timestamps();
            $table->primary(['upper', 'lower']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subordinates');
    }
};
