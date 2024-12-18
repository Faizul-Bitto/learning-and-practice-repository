<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'product_id'  => Str::uuid()->toString(),
            'name'        => $this->faker->word(),
            'description' => $this->faker->sentence( 5 ),
            'price'       => $this->faker->randomFloat( 2, 1, 200 ),
            'stock'       => $this->faker->numberBetween( 1, 200 ),
            'image'       => $this->faker->imageUrl(),
        ];
    }
}
