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
        Schema::create('announsments', function (Blueprint $table) {
            $table->id();
            $table->string('title');                       // Required title
            $table->date('date_created')->nullable();      // Optional creation date
            $table->date('deadline')->nullable();          // Optional deadline
            $table->string('image')->nullable();           // Optional image path
            $table->string('link')->nullable();            // Optional general link
            $table->string('google_form_link')->nullable();// Optional Google Form link
            $table->string('facebook_link')->nullable();   // Optional Facebook post link
            $table->text('description')->nullable();       // Announcement description
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announsments');
    }
};
