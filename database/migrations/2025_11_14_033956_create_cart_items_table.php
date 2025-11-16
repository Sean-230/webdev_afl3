<?php

// database/migrations/xxxx_xx_xx_create_carts_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->boolean('is_checked_out')->default(false);
            $table->timestamps();
            $table->unique('user_id'); // one cart per user
        });

        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->integer('quantity')->unsigned()->default(1);
            $table->decimal('price', 10, 2)->nullable(); // snapshot price
            $table->timestamps();
            $table->unique(['cart_id','product_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('cart_items');
        Schema::dropIfExists('carts');
    }
};
