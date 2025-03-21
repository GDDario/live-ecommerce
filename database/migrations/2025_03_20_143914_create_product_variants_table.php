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
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->unsignedBigInteger('product_id');
            $table->unsignedInteger('variant_type_id');
            $table->decimal(7, 2);
            $table->integer('quantity')->default(0);
            $table->json('images')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('variant_type_id')->references('id')->on('variant_types');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
