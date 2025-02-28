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
        Schema::create('city_companies', function (Blueprint $table) {
            $table->id();
            $table->string('address')->nullable();
            $table->boolean('is_active')->default(true);
            $table->foreignId('city_id')->references('id')->on('cities');
            $table->foreignId('company_id')->references('id')->on('companies');
            $table->timestamps();

            //indexes
            $table->index('is_active', 'city_companies_is_active_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('city_companies');
    }
};
