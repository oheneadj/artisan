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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');
            $table->string('name');
            $table->string('logo')
                ->nullable();
            $table->string('slug');
            $table->string('location');
            $table->string('phone_number');
            $table->longText('description');
            $table->string('video_url')
                ->nullable();
            $table->string('certificate_number')
                ->nullable();
            $table->boolean('verified')
                ->default(false)
                ->nullable();
            $table->timestamp('verified_at')
                ->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
