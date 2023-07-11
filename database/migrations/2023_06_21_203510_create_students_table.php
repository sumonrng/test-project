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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stu_id');
            //$table->foreign('stu_id')->references('cid')->on('cities')->onUpdate('cascade')->onDelete('cascade');
            //$table->unsignedBigInteger('city_id');
            //$table->foreignId('city_id')->constrained();
            //$table->foreignId('city_cid')->constrained('cities')->cascadeOnUpdate()->nullOnDelete();
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->timestamps();
            $table->foreign('stu_id')->references('cid')->on('cities')->cascadeOnUpdate()->onDelete('cascade');
            //$table->foreign('stu_id')->references('cid')->on('cities')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
