<?php

namespace App\Http\Requests;

use App\Enums\CarClassEnum;
use App\Enums\FuelTypeEnum;
use App\Enums\TransmissionEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostFilterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'city' => ['nullable', 'integer'],
            'transmission' => ['nullable', Rule::enum(TransmissionEnum::class)],
            'fuelType' => ['nullable', Rule::enum(FuelTypeEnum::class)],
            'model' => ['nullable', 'integer'],
            'no_of_seats' => ['nullable', 'integer', 'min:1'],
            'class' => ['nullable', Rule::enum(CarClassEnum::class)],
            'price_range' => ['nullable', 'array'],
            'brand' => ['nullable', 'string'],
            'category' => ['nullable', 'string'],
        ];
    }
}
