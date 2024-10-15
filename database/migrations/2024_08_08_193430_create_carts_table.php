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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('author');
            $table->integer('price');
            $table->string('page');
            $table->string('format');
            $table->string('isbn');
            $table->string('language');
            $table->string('dimension');
            $table->string('category');
            $table->string('image');
            $table->integer('quantity');
            $table->string('bookid');
            $table->string('buyer');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
