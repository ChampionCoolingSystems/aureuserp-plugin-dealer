<?php

namespace ChampionCoolingSystems\Dealer\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Webkul\Support\Models\Company;
use Webkul\Support\Models\Country;
use Webkul\Support\Models\State;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dealer>
 */
class DealerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => fake()->firstName,
            'lastname' => fake()->lastName,
            'companyname' => Company::factory(),
            'email' => fake()->unique()->safeEmail,
            'phone' => fake()->phoneNumber,
            'fax' => fake()->phoneNumber,
            'address' => fake()->streetAddress,
            'city' => fake()->city,
            'State' => State::factory(),
            'postcode' => fake()->postcode,
            'Country' => Country::factory(),
            'active' => fake()->boolean(),
        ];
    }
}
