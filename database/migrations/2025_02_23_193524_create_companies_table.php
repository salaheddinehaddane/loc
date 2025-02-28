<?php

use App\Enums\CompanyStatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->nullable()->unique();
            $table->string('logo')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->text('description')->nullable();
            $table->enum('status', Arr::pluck(CompanyStatusEnum::cases(), 'value'))->default(CompanyStatusEnum::INACTIVE->value);
            $table->timestamps();

            //indexes
            $table->index('status', 'companies_status_index');
        });


        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_company_id_foreign');
        });
        Schema::dropIfExists('companies');
    }
};
