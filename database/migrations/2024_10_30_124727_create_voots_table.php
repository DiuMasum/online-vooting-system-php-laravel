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
        Schema::create('voots', function (Blueprint $table) {
            $table->id();
            $table->json('president')->nullable();
            $table->json('vice_president')->nullable();
            $table->json('secretary')->nullable();
            $table->json('treasurer')->nullable();
            $table->json('joint_secretary')->nullable();
            $table->json('organising_secretary')->nullable();
            $table->json('office_secretary')->nullable();
            $table->json('legal_social_ethics_secretary')->nullable();
            $table->json('broadcasting_media_secretary')->nullable();
            $table->json('education_literature_secretary')->nullable();
            $table->json('sports_culture_secretary')->nullable();
            $table->json('publishing_secretary')->nullable();
            $table->json('hosting_secretary')->nullable();
            $table->json('assistant_organising_secretary')->nullable();
            $table->json('assistant_treasurer')->nullable();
            $table->json('executive_member')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voots');
    }
};
