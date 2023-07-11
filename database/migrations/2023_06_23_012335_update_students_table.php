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
        Schema::table('students', function (Blueprint $table) {
            //$table->foreign('stu_id')->references('cid')->on('cities')->cascadereOnUpdate()->restrictOnDelete();
            //$table->dropUnique('students_email_unique');
            //$table->dropForeign('students_stu_id_foreign');
            //$table->dropForeign(['stu_id']);
            //$table->foreign('stu_id')->references('cid')->on('cities')->onDelete('cascade');
            //$table->string('city')->after('mobile')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            //
        });
    }
};
