<?php

use Illuminate\Database\Seeder;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\SubCategory([
            'name' => 'Brand PC',
            'category_id' => 1
        ]);

        $category->save();

        $category = new \App\SubCategory([
            'name' => 'PC Configurations',
            'category_id' => 1
        ]);

        $category->save();

        $category = new \App\SubCategory([
            'name' => 'Lap Top',
            'category_id' => 2
        ]);

        $category->save();

        $category = new \App\SubCategory([
            'name' => 'Lap Top Gears',
            'category_id' => 2
        ]);

        $category->save();

        $category = new \App\SubCategory([
            'name' => 'Optical Devices',
            'category_id' => 3
        ]);

        $category->save();

        $category = new \App\SubCategory([
            'name' => 'Mother Boards',
            'category_id' => 3
        ]);

        $category->save();

        $category = new \App\SubCategory([
            'name' => 'Graphic Cards',
            'category_id' => 3
        ]);

        $category->save();

        $category = new \App\SubCategory([
            'name' => 'SSD - Solid State Drive',
            'category_id' => 3
        ]);

        $category->save();

        $category = new \App\SubCategory([
            'name' => 'Speakers',
            'category_id' => 4
        ]);

        $category->save();

        $category = new \App\SubCategory([
            'name' => 'Headphones',
            'category_id' => 4
        ]);

        $category->save();

        $category = new \App\SubCategory([
            'name' => 'Webcams',
            'category_id' => 4
        ]);

        $category->save();

        $category = new \App\SubCategory([
            'name' => 'USB Flash',
            'category_id' => 4
        ]);

        $category->save();

        $category = new \App\SubCategory([
            'name' => 'OS',
            'category_id' => 5
        ]);

        $category->save();

        $category = new \App\SubCategory([
            'name' => 'Programs',
            'category_id' => 5
        ]);

        $category->save();

    }
}
