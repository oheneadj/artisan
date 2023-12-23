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
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');
            $table->foreignId('shop_id')
                ->constrained('shops')
                ->onDelete('cascade');
            $table->string('name');
            $table->string('slug');
            $table->decimal('price');
            $table->decimal('sale_price')
                ->nullable();
            $table->boolean('sale')
                ->default(false);
            $table->longText('description');
            $table->foreignId('category_id')
                ->constrained('categories');
            $table->string('status')->nullable();
            $table->dateTime('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.s
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};
