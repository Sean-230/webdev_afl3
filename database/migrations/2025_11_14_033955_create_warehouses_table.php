<?php

// database/migrations/xxxx_xx_xx_create_warehouses_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->string('location')->nullable(); // e.g. "Main Warehouse"
            $table->timestamps();
        });

        // stocks table linking warehouses and products
        Schema::create('warehouse_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('warehouse_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->integer('quantity')->default(0);
            $table->string('batch_number')->nullable();
            $table->timestamps();
            $table->unique(['warehouse_id','product_id','batch_number']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('warehouse_product');
        Schema::dropIfExists('warehouses');
    }
};

