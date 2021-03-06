<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'quantity' => $this->faker->numberBetween(1, 11),
            'price' => $this->faker->randomFloat(2, 10, 30),
            'picture' => $this->faker->imageUrl(360, 360),
            'brand_id' => Brand::factory()->create()
        ];
    }
}
