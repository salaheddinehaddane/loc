<?php
namespace App\Repositories;

use App\Dtos\PostFilterDto;
use App\Enums\CarStatusEnum;
use App\Enums\CompanyStatusEnum;
use App\Models\Post;

class PostRepository
{

    public function getPosts(PostFilterDto $filters)
    {

        return Post::query()
            ->with([
                'companyBranch:id,name,phone,email,whatsapp,city_id',
                'companyBranch.city',
                'car',
                'car.brand:id,name',
                'car.category:id,name',
            ])
            ->where(function ($query) {
                $query->whereHas('companyBranch', function ($query) {
                    $query->where('is_active', true);
                })->whereHas('car', function ($query) {
                    $query->where('available_from', '<=', now())
                        ->where('available_to', '>', now())
                        ->where('status', CarStatusEnum::AVAILABLE);
                });
            })
            ->when(! is_null($filters->cityId), function ($query) use ($filters) {
                $query->whereHas('companyBranch.city', function ($query) use ($filters) {
                    $query->where('city_id', $filters->cityId)
                        ->where('is_active', true);
                });
            })
            ->whereHas('car', function ($query) use ($filters) {
                $query->when(! is_null($filters->transmission), function ($query) use ($filters) {
                    $query->where('transmission', $filters->transmission);
                })
                    ->when(! is_null($filters->fuelType), function ($query) use ($filters) {
                        $query->where('fuel_type', $filters->fuelType);
                    })
                    ->when(! is_null($filters->model), function ($query) use ($filters) {
                        $query->where('model', $filters->model);
                    })
                    ->when(! is_null($filters->noOfSeats), function ($query) use ($filters) {
                        $query->where('no_of_seats', $filters->noOfSeats);
                    })
                    ->when(! is_null($filters->class), function ($query) use ($filters) {
                        $query->where('class', $filters->class);
                    })
                    ->when(count($filters->priceRange), function ($query) use ($filters) {
                        $query->whereBetween('price_per_day', $filters->priceRange);
                    })
                    ->when(! is_null($filters->brand), function ($query) use ($filters) {
                        $query->where('brand_id', $filters->brand);
                    })
                    ->when(! is_null($filters->category), function ($query) use ($filters) {
                        $query->where('category_id', $filters->category);
                    });

            })
            ->active()
            ->inRandomOrder()
            ->simplePaginate(20);
    }
}
