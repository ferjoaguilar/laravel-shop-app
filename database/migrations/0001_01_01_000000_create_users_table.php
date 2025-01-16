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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // USERID INT AUTO_INCREMENT PRIMARY KEY
            $table->string('name'); // NAME VARCHAR(255)
            $table->string('lastname'); // LASTNAME VARCHAR(255)
            $table->string('email')->unique(); // EMAIL VARCHAR(255) UNIQUE
            $table->string('password'); // PASSWORD VARCHAR(255)
            $table->string('phone')->nullable(); // PHONE VARCHAR(255) NULL
            $table->timestamps(); // CREATED_AT TIMESTAMP, UPDATED_AT TIMESTAMP
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
