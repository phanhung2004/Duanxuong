<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Variant>
 */
class VariantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => $this->faker->numberBetween(1, 10), // Giả định rằng có 10 sản phẩm
            'color_id' => $this->faker->numberBetween(1, 4), // Giả định rằng có 5 màu
            'size_id' => $this->faker->numberBetween(1, 4), // Giả định rằng có 5 kích thước
            'quantity' => $this->faker->numberBetween(1, 100),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
