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
        Schema::create('mhs', function (Blueprint $table) {
            // $table->id();
            $table->char('nim', 10);
            $table->string('nama', 150);
            $table->enum('gender', ['M', 'F']);
            $table->string('alamat', 200);
            $table->string('email', 150);
            $table->char('hp', 20);
            $table->primary('nim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mhs');
    }
};
