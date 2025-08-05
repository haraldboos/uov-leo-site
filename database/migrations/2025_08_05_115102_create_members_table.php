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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position'); 
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('year'); 
            $table->enum('category', [
                'Executive Committee',
                'Board of Directors',
            ]);
            $table->string('image')->nullable();
            $table->unsignedInteger('order_number')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
