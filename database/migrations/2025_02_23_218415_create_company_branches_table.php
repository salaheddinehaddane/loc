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
        Schema::create('company_branches', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('address')->nullable();
            $table->boolean('is_active')->default(true);
            $table->foreignId('company_id')->references('id')->on('companies');
            $table->foreignId('city_id')->references('id')->on('cities');

            // indexes
            $table->index('is_active', 'company_branches_active_index');
            $table->index('company_id', 'company_branches_company_id_index');
            $table->index(['city_id', 'is_active'], 'company_branches_city_active_index');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_branches');
    }
};
