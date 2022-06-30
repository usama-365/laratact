<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class ContactFactory extends Factory
{
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "first_name" => $this->faker->firstName(),
            "last_name" => $this->faker->lastName(),
            "phone" => $this->faker->phoneNumber(),
            "email" => $this->faker->email(),
            "address" => $this->faker->address(),
            "company_id" => Company::all('id')->random(1)->value("id"),
            "created_at" => now(),
            "updated_at" => now()
        ];
    }
}
