<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('shoppinglist_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shoppinglist_id');
            $table->foreignId('product_id');
            $table->integer('amount');
        });

        Schema::table('shoppinglist_items', function ($table) {
            $table->foreign('shoppinglist_id')->references('id')->on('shoppinglists')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('shoppinglist_items');
    }
};
