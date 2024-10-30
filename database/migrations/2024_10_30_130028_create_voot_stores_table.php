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
        Schema::create('voot_stores', function (Blueprint $table) {
            $table->id();
            $table->json('president')->nullable();
            $table->json('vice_president')->nullable();
            $table->json('secretary')->nullable();
            $table->json('treasurer')->nullable();
            $table->json('firstjointsecretary')->nullable();
            $table->json('secondjointsecretary')->nullable();
            $table->json('thirdjointsecretary')->nullable();
            $table->json('fourthjointsecretary')->nullable();
            $table->json('organisingsecretary')->nullable();
            $table->json('officesecretary')->nullable();
            $table->json('legalsocialsecretary')->nullable();
            $table->json('broadcastingsecretary')->nullable();
            $table->json('educationsecretary')->nullable();
            $table->json('sportsculturalsecretary')->nullable();
            $table->json('publishingsecretary')->nullable();
            $table->json('hostingsecretary')->nullable();
            $table->json('assistantorganisingecretary')->nullable();
            $table->json('assistanttreasurer')->nullable();
            $table->json('firstexecutivemember')->nullable();
            $table->json('secondexecutivemember')->nullable();
            $table->json('thirdexecutivemember')->nullable();
            $table->json('fourthexecutivemember')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voot_stores');
    }
};
