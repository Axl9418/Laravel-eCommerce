<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $subcategories = [
            //Smartphones and tablets
            [
                'category_id' => 1,
                'name' => 'Smartphones and tablets',
                'slug' => Str::slug('Smartphones and tablets'),
                'color' => true
            ],

            [
                'category_id' => 1,
                'name' => 'Smartphones accessories',
                'slug' => Str::slug('Smartphones accessories')
            ],

            [
                'category_id' => 1,
                'name' => 'Smartwatches',
                'slug' => Str::slug('Smartwatches')
            ],

            //TVs
            [
                'category_id' => 2,
                'name' => 'SmartTV',
                'slug' => Str::slug('SmartTV')
            ],

            [
                'category_id' => 2,
                'name' => 'Audio',
                'slug' => Str::slug('Audio')
            ],

            [
                'category_id' => 2,
                'name' => 'Stereo',
                'slug' => Str::slug('Stereo')
            ],

            //Consoles and videogames
            [
                'category_id' => 3,
                'name' => 'Xbox',
                'slug' => Str::slug('Xbox')
            ],

            [
                'category_id' => 3,
                'name' => 'Play Station',
                'slug' => Str::slug('Play Station')
            ],

            [
                'category_id' => 3,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo')
            ],

            //Computers
            [
                'category_id' => 4,
                'name' => 'Laptops',
                'slug' => Str::slug('Laptops')
            ],

            [
                'category_id' => 4,
                'name' => 'Desktop',
                'slug' => Str::slug('Desktop')
            ],

            [
                'category_id' => 4,
                'name' => 'PC accessories',
                'slug' => Str::slug('Pc accessories')
            ],

            //Fashion
            [
                'category_id' => 5,
                'name' => 'Woman',
                'slug' => Str::slug('Woman')
            ],

            [
                'category_id' => 5,
                'name' => 'Men',
                'slug' => Str::slug('Men')
            ],

            [
                'category_id' => 5,
                'name' => 'Sunglasses',
                'slug' => Str::slug('Sunglasses')
            ],

            [
                'category_id' => 5,
                'name' => 'Watches',
                'slug' => Str::slug('Watches')
            ],

        ];

        foreach ($subcategories as $subcategorie) {
            
            Subcategory::factory(1)->create($subcategorie);
        }
    }
}
