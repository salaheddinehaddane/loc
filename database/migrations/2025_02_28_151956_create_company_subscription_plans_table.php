<?php

use App\Enums\CompanySubscriptionStatusEnum;
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
        Schema::create('company_subscription_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->references('id')->on('companies');
            $table->foreignId('subscription_plan_id')->references('id')->on('subscription_plans');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->enum('status', Arr::pluck(CompanySubscriptionStatusEnum::cases(), 'value'))->default(CompanySubscriptionStatusEnum::ACTIVE->value);
            $table->timestamps();

            //indexes
            $table->index('status', 'company_subscription_plans_status_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_subscription_plans');
    }
};
