<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tenant>
 */
class TenantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $c = [
            'USD' => '$',
            'EUR' => '€',
            'GBP' => '£',
            'JPY' => '¥',
            'INR' => '₹',
            'RUB' => '₽',
            'BTC' => '₿',
        ];

        return [
            'name' => $this->faker->name(),
            'subdomain' => $this->faker->unique()->word(),
            'domain' => $this->faker->domainName(),
            'username' => $this->faker->unique()->word(),
            'charset' => "utf8mb4",
            'collation' => "utf8mb4_unicode_ci",
            'timezone' => $this->faker->timezone(),
            'locale' => $this->faker->randomElement(['en', 'es', 'fr', 'de', 'it', 'pt', 'ru', 'ja', 'zh-CN', 'zh-TW']),
            'currency' => $this->faker->randomElement(array_keys($c)),
            'currency_symbol' => $this->faker->randomElement($c),
            // Left, Right, Left-space, Right-space
            'currency_position' => $this->faker->randomElement(['left', 'right', 'left-space', 'right-space']),
            'active' => $this->faker->boolean(),
        ];
    }
}
