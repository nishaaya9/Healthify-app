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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('booking_id');
            $table->unsignedBigInteger('d_id');
            $table->foreign('d_id')->references('d_id')->on('doctors')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('p_id');
            $table->foreign('p_id')->references('p_id')->on('patients')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
