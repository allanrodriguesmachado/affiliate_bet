<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Affiliate>
 */
class AffiliateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'cpf' => $this->faker->unique()->numerify('###.###.###-##'),
            'birth_date' => $this->faker->date('Y-m-d', '2000-01-01'),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->streetAddress(),
            'number' => $this->faker->buildingNumber(),
            'complement' => 'null',
            'state' => 'null',
            'neighborhood' => $this->faker->word(),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
