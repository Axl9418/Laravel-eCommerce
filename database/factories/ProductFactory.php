<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Support\Str;
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
        //sentence with 2 words
        $name = $this->faker->sentence(2);

        //Choose one random subcategory for the DB
        $subcategory = Subcategory::all()->random();

        $category = $subcategory->category;

        $brand = $category->brands->random();

        //check if color is true
        if($subcategory->color) {
            $quantity = null;
        }else {
            $quantity = 15;
        }

        return [
            'name' => $name,
            'slug' =>Str::slug($name),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomElement([19.99, 49.99, 99.99]),
            'subcategory_id' => $subcategory->id,
            'brand_id' => $brand->id,
            'quantity' => $quantity,
            'status' => 1
        ];
    }
}
