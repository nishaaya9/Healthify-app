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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id('d_id');
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('role_id')->on('roles')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->string('d_name');
            $table->string('d_lname')->nullable();            
            $table->string('d_email')->unique();
            $table->string('d_password');
            $table->bigInteger('d_mobile_number')->nullable();
            $table->string('d_gender')->nullable();
            $table->date('d_dob')->nullable()->default(null);
            $table->string('d_city')->nullable();
            $table->string('d_state')->nullable();
            $table->string('d_country')->nullable();
            $table->string('degree')->nullable();
            $table->string('clinic_or_Hospital_name')->nullable();
            $table->text('clinic_or_Hospital_address')->nullable();
            $table->integer('fees')->nullable();
            $table->string('specialization')->nullable();
            $table->string('select_day_from')->nullable();
            $table->string('select_day_to')->nullable();
            $table->string('time_from')->nullable();
            $table->string('time_to')->nullable();
            $table->string('d_profile_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
