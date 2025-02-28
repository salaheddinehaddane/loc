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
        Schema::create('subscription_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->integer('duration'); // in months
            $table->integer('max_cars')->nullable();
            $table->integer('max_offers')->nullable();
            $table->boolean('is_active')->default(true);
            $table->json('features')->nullable();
            $table->string('description');
            $table->timestamps();

            //indexes
            $table->index('is_active', 'subscription_plans_is_active_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_plans');
    }
};
