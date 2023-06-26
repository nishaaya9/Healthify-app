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
        Schema::create('patients', function (Blueprint $table) {
            $table->id('p_id');
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('role_id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('p_name');
            $table->string('p_lname')->nullable();
            $table->string('p_email')->unique();
            $table->string('p_password');
            $table->bigInteger('p_mobile_number')->nullable();
            $table->string('p_gender')->nullable();
            $table->date('p_dob')->nullable()->default(null);
            $table->text('p_address')->nullable();
            $table->string('p_blood_group')->nullable();
            $table->string('p_city')->nullable();
            $table->string('p_state')->nullable();
            $table->string('p_country')->nullable();
            $table->string('p_profile_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
