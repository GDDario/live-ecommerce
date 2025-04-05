<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('color_id');
            $table->unsignedInteger('size_id');
//            $table->unsignedBigInteger('length_id');
            $table->char('gender', 1)->default('U');
            $table->decimal('price', 7, 2);
            $table->integer('quantity')->default(0);
            $table->json('images')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('color_id')->references('id')->on('colors');
            $table->foreign('size_id')->references('id')->on('sizes');
//            $table->foreign('length_id')->references('id')->on('lengths');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
