<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Smartphones and tablets',
                //convert strings into slugs
                'slug' => Str::slug('Smartphones and tablets'),
                'icon' => '<i class="fas fa-tablet-alt"></i>'
            ],

            [
                'name' => 'TVs and audio',
                //convert strings into slugs
                'slug' => Str::slug('TVs and audio'),
                'icon' => '<i class="fas fa-tv"></i>'
            ],

            [
                'name' => 'Consoles and videogames',
                //convert strings into slugs
                'slug' => Str::slug('Consoles and videogames'),
                'icon' => '<i class="fas fa-gamepad"></i>'
            ],

            [
                'name' => 'Computers',
                //convert strings into slugs
                'slug' => Str::slug('Computers'),
                'icon' => '<i class="fas fa-laptop"></i>'
            ],

            [
                'name' => 'Fashion',
                //convert strings into slugs
                'slug' => Str::slug('Fashion'),
                'icon' => '<i class="fas fa-tshirt"></i>'
            ]

        ];

        foreach ($categories as $category) {
             $category = Category::factory(1)->create($category)->first();

             //Asigned 4 brands to each category
             $brands = Brand::factory(4)->create();

             foreach ($brands as $brand) {
                 $brand->categories()->attach($category->id);
             }
        }
    }
}
