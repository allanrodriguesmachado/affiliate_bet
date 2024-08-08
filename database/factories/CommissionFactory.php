<?php

namespace Database\Factories;

use App\Models\Affiliate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commission>
 */
class CommissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'affiliated_id' => Affiliate::factory(),
            'amount' => $this->faker->randomFloat(2, 100, 10000),
            'commission_created_at' => $this->faker->date('Y-m-d', '2000-01-01')
        ];
    }
}
