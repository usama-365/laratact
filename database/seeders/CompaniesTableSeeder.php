<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;


class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::query()->delete();
        Company::factory()->count(10)->create();
    }
}
