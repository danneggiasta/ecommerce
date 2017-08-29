<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	'imagePath' => 'http://www.argos.co.uk/wcsstore/argos/en_GB/images/buyingguides/desktop/desktop-pc.jpg',
        	'title'		=> 'Argos',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium hic, natus tempora modi veniam. Aspernatur, quae quasi dolorum vel pariatur voluptatibus quis.',
        	'price'		=> 400,
        	'subcategory_id' => 1
        ]);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://dlcdnimgs.asus.com/websites/global/News/RsB9eFe5gR9sMMbg/M32_Multimedia-Desktop-PC-built-for-essential-productivity-and-multimedia-enjoyment.jpg',
        	'title'		=> 'Asus II',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium hic, natus tempora modi veniam. Asperna.',
        	'price'		=> 500,
        	'subcategory_id' => 1
        ]);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://images10.newegg.com/NeweggImage/ProductImage/83-230-178-S01.jpg',
        	'title'		=> 'Red Fire',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium hic, natus tempora modi veniam. Aspernatur, quae quasi doloru.',
        	'price'		=> 600,
        	'subcategory_id' => 1
        ]);

        $product->save();
        
        $product = new \App\Product([
        	'imagePath' => 'https://fthmb.tqn.com/qtA_FT7In0tHQSZnjuk0V65zVl0=/1000x765/filters:no_upscale()/about/Asus-Transformer-Book-T300CHI-584eda495f9b58a8cd2d044f.jpg',
        	'title'		=> 'Asus Lap',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium hic, natus tempora modi veniam. Aspernatur, quae quasi dolorum vel pariatur voluptatibus quis.',
        	'price'		=> 700,
        	'subcategory_id' => 2
        ]);

        $product->save();
        
        $product = new \App\Product([
        	'imagePath' => 'http://s7d1.scene7.com/is/image/officedepot/809904_p_i3567_3380blk_pus_7?$OD-Dynamic$&wid=450&hei=450',
        	'title'		=> 'Dell',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium hic, natus tempora modi veniam. Aspernatur, quae quasi dolorum vel pariatur voluptatibus quis.',
        	'price'		=> 400,
        	'subcategory_id' => 2
        ]);

        $product->save();
        
        $product = new \App\Product([
        	'imagePath' => 'https://pisces.bbystatic.com/BestBuy_US/store/ee/2016/com/misc/flex_all_monitors5029703.jpg;maxHeight=460;maxWidth=460',
        	'title'		=> 'HP',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium hic, natus tempora modi veniam. Aspernatur, quae quasi dolorum vel pariatur voluptatibus quis.',
        	'price'		=> 120,
        	'subcategory_id' => 3
        ]);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://pisces.bbystatic.com/image2/BestBuy_US/images/products/4753/4753004_sd.jpg;maxHeight=550;maxWidth=642',
        	'title'		=> 'Acer',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium hic, natus tempora modi veniam. Aspernatur, quae quasi dolorum vel pariatur voluptatibus quis.',
        	'price'		=> 130,
        	'subcategory_id' => 3
        ]);

        $product->save();


    }
}