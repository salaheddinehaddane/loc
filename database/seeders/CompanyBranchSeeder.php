<?php

namespace Database\Seeders;

use App\Models\CompanyBranch;
use Illuminate\Database\Seeder;

class CompanyBranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyBranch::factory()->count(3000)->create();
    }
}
