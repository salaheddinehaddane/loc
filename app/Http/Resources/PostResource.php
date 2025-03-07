<?php
namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'company_name'     => $this->whenLoaded('companyBranch', fn() => $this->companyBranch->name),
            'company_email'    => $this->whenLoaded('companyBranch', fn() => $this->companyBranch->email),
            'company_phone'    => $this->whenLoaded('companyBranch', fn() => $this->companyBranch->phone),
            'company_whatsapp' => $this->whenLoaded('companyBranch', fn() => $this->companyBranch->whatsapp),
            'city'             => $this->whenLoaded('companyBranch', fn() => $this->companyBranch->city->name),
            'price_per_day'    => $this->whenLoaded('car', fn() => $this->car->price_per_day),
            'brand'            => $this->whenLoaded('car', fn() => $this->car->brand->name),
            'category'         => $this->whenLoaded('car', fn() => $this->car->category->name),
            'transmission'     => $this->whenLoaded('car', fn() => $this->car->transmission),
            'fuel_type'        => $this->whenLoaded('car', fn() => $this->car->fuel_type),
            'model'            => $this->whenLoaded('car', fn() => $this->car->model),
            'no_of_seats'      => $this->whenLoaded('car', fn() => $this->car->no_of_seats),
            'image'            => $this->whenLoaded('car', fn() => $this->car->image),
        ];
    }
}
