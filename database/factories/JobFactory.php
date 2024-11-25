<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph(2, true),
            'salary' => $this->faker->numberBetween(30000, 100000),
            'tags' => $this->faker->words(3, true),
            'job_type' => $this->faker->randomElement(['full-time', 'part-time', 'contract', 'internship', 'temporary']),
            'remote' => $this->faker->boolean,
            'requirements' => $this->faker->paragraph,
            'benefits' => $this->faker->paragraph,
            'address' => $this->faker->streetAddress,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'zipcode' => $this->faker->postcode,
            'contract_email' => $this->faker->safeEmail,
            'contract_phone' => $this->faker->phoneNumber,
            'company_name' => $this->faker->company,
            'company_description' => $this->faker->paragraph,
            'company_logo' => $this->faker->imageUrl(),
            'company_website' => $this->faker->url,
        ];
    }
}
