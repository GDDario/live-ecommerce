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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->unsignedBigInteger('user_id');
            $table->string('receiver_name', 100);
            $table->string('phone_number', 20);
            $table->string('postal_code', 50);
            $table->string('country', 50);
            $table->string('state', 50);
            $table->string('city', 100);
            $table->string('district', 50);
            $table->string('street_address', 100);
            $table->string('house_number', 20);
            $table->string('address_line_2', 100)->nullable();
            $table->string('landmark', 50)->nullable();
            $table->boolean('main')->default(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
