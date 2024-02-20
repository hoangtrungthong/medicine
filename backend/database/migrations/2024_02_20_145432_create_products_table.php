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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('unit_id');
            $table->string('name');
            $table->string('slug');
            $table->string('code');
            $table->longText('description');
            $table->longText('specification');
            $table->longText('ingredients');
            $table->tinyInteger('type')->default(0)->comment('0: Medicine, 1: Dietary supplement');
            $table->bigInteger('quantity');
            $table->decimal('amount', 18, 2);
            $table->string('effects');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
