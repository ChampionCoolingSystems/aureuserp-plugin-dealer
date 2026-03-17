<?php

namespace ChampionCoolingSystems\Dealer\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Webkul\Support\Models\Country;
use Webkul\Support\Models\State;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\ChampionCoolingSystems\Dealer\Models\BillingAddress>
 */
class BillingAddressFactory extends Factory
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
            'address' => fake()->streetAddress,
            'city' => fake()->city,
            'state_id' => State::factory(),
            'postcode' => fake()->postcode,
            'country_id' => Country::factory(),
        ];
    }
}
