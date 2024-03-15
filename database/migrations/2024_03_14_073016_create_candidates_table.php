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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id('candidate_id');
            $table->string('name');
            $table->string('email');
            $table->text('address');
            $table->string('city');
            $table->string('district');
            $table->string('state');
            $table->foreignId('qualification')->references('qualification_id')->on('qualification__masters');
            $table->foreignId('industry')->references('industry_id')->on('industry__masters');
            $table->foreignId('department')->references('department_id')->on('department__masters');
            $table->foreignId('function')->references('function_id')->on('function__masters');
            $table->integer('experience');
            $table->integer('current_salary');
            $table->string('notice-period');
            // $table->text('Resume');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
