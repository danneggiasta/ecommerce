<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Category([
        	'name' => 'Desktop PC'
        ]);

        $category->save();
        
        $category = new \App\Category([
        	'name' => 'Lap Top'
        ]);

        $category->save();
        
        $category = new \App\Category([
            'name' => 'PC Components'
        ]);

        $category->save();
        
        $category = new \App\Category([
            'name' => 'PC Peripherals'
        ]);

        $category->save();
        
        $category = new \App\Category([
        	'name' => 'Software'
        ]);

        $category->save();

    }
}
