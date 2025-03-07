<?php

namespace App\Dtos;

final readonly class PostFilterDto
{
    public int $page;
    public ?int $cityId;
    public ?string $transmission;
    public ?string $fuelType;
    public ?int $model;
    public ?int $noOfSeats;
    public ?string $class;
    public ?array $priceRange;
    public ?string $brand;
    public ?string $category;
    public function __construct($request)
    {
        $this->page = $request->page ?? 1;
        $this->cityId = $request->city ?? null;
        $this->transmission = $request->transmission ?? null;
        $this->fuelType = $request->fuel_type ?? null;
        $this->model = $request->model ?? null;
        $this->noOfSeats = $request->no_of_seats ?? null;
        $this->class = $request->class ?? null;
        $this->priceRange = $request->price_range ?? [];
        $this->brand = $request->brand ?? null;
        $this->category = $request->category ?? null;
    }

    public static function fromRequest($request)
    {
        return new self($request);
    }
}
