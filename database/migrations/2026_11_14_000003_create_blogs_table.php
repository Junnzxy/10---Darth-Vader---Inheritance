<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations for View Blog (Darth Vader Character).
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('birth_name')->nullable();
            $table->string('title');
            $table->string('affiliation');
            $table->text('quote')->nullable();
            $table->text('image')->nullable();
            $table->string('homeworld');
            $table->string('weapon');
            $table->text('description');
            $table->json('powers')->nullable();
            $table->json('timeline')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
