<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        define('RECORDS_TO_ADD', 50);
        // Remove any data
        DB::table('companies')->truncate();
        $faker = Faker::create(); // Create a new generator
        // Fill the companies associative array with sample records
        $companies = [];
        for ($i = 0; $i < RECORDS_TO_ADD; ++$i) {
            $companies[] = [
                "name" => $faker->company(),
                "address" => $faker->address(),
                "website" => $faker->url(),
                "email" => $faker->email(),
                "created_at" => now(),
                "updated_at" => now()
            ];
        }
        // Insert the data of associative array in the table
        DB::table('companies')->insert($companies);
    }
}
