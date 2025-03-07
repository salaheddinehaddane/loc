<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_branch_id')->references('id')->on('company_branches');
            $table->foreignId('car_id')->references('id')->on('cars');
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            // indexes
            $table->unique(['company_branch_id', 'car_id']);
            $table->index(['company_branch_id', 'is_active'], 'posts_company_active_index');
            $table->index(['car_id', 'is_active'], 'posts_car_active_index');
            $table->index('is_active', 'posts_is_active_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
