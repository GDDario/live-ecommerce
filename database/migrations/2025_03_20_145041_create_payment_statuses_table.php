<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payment_statuses', function (Blueprint $table) {
            $table->unsignedSmallInteger('id', true);
            $table->uuid()->unique();
            $table->string('name', 70);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payment_statuses');
    }
};
