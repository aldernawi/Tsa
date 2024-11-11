<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('researches', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->longText('abstract');
            $table->date('publication_date');
            $table->unsignedBigInteger('department_id');
            $table->string('file');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('researches');
        Schema::dropIfExists('departments');
        Schema::dropIfExists('users');
    }
};
