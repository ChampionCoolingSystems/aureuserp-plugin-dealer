<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\ChampionCoolingSystems\Dealer\Models\ContactInformation>
 */
class ContactInformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dealer_id' => NULL,
            'firstname' => fake()->firstName,
            'lastname' => fake()->lastName,
            'email' => fake()->unique()->safeEmail,
            'phone' => fake()->phoneNumber,
            'fax' => fake()->phoneNumber,
        ];
    }
}
