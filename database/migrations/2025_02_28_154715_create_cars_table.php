<?php

use App\Enums\CarClassEnum;
use App\Enums\CarStatusEnum;
use App\Enums\FuelTypeEnum;
use App\Enums\TransmissionEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->references('id')->on('companies');
            $table->string('registration_number')->unique();
            $table->integer('model');
            $table->enum('fuel_type', Arr::pluck(FuelTypeEnum::cases(), 'value'));
            $table->enum('transmission', Arr::pluck(TransmissionEnum::cases(), 'value'));
            $table->string('image');
            $table->string('price_per_day');
            $table->date('available_from');
            $table->date('available_to');
            $table->enum('status', Arr::pluck(CarStatusEnum::cases(), 'value'))->default(CarStatusEnum::AVAILABLE->value);
            $table->enum('class', Arr::pluck(CarClassEnum::cases(), 'value'));
            $table->integer('no_of_seats');
            $table->integer('no_of_doors');
            $table->timestamps();

            // indexes
            $table->index(['available_from', 'available_to'], 'cars_available_from_available_to_index');
            $table->index('status', 'cars_status_index');
            $table->index('fuel_type', 'cars_fuel_type_index');
            $table->index('transmission', 'cars_transmission_index');
            $table->index('class', 'cars_class_index');
            $table->index('no_of_seats', 'cars_no_of_seats_index');
            $table->index('price_per_day', 'cars_price_per_day_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
