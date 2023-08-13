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
        Schema::create('product', function(Blueprint $table){
            $table->id();
            $table->string('product_name');
            $table->string('product_markup_name');
            $table->string('product_vietnamese_name');
            $table->double('price_origin');
            $table->double('tax');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('product');
    }
};
