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
        Schema::create('usersProfile', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->date('dateBirth');
            $table->string('email')->unique();
            $table->string('profilePicture')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usersProfile');
    }
};
