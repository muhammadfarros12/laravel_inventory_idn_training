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
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('room_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('item_number')->unique();
            $table->string('item_name');
            $table->string('image');
            $table->text('spec');
            $table->integer('stock');
            $table->string('unit');
            $table->enum('condition', ['baik', 'rusak', 'tidak layak']);
            $table->foreign('room_id')->on('rooms')->references('id')->onDelete('cascade');
            $table->foreign('category_id')->on('categories')->references('id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
