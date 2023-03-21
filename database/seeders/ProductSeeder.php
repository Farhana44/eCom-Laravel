<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //  DB::table('products')->insert([
        //     'name'       =>'LG Mobile',
        //     'price'      =>"10000",
        //     'category'   =>"mobile",
        //     'gallery'    =>"https://fdn2.mobgsm.com/vv/pics/lg/lg-k41s-2.jpg",
        //     'description'=>"A smart Phone with Many Features.8 pix camera"        
        // ]);

         DB::table('products')->insert([
            [
            'name'       =>'SAMSUNG Fridge',
            'price'      =>"89000",
            'category'   =>"Fridge",
            'gallery'    =>"https://encrypted-tbn0.gstatic.com/
                           images?q=tbn:ANd9GcSyd4aYETS_srTbBCaaux_jz6JiEQhVLlAi2A&usqp=CAU",
            'description'=>" This helps to maintain desired temperature in Refrigerator and freezer and does not 
                            allow the smell of food to mix with each other"
            ],

            [
            'name'       =>'Iphone Mobile',
            'price'      =>"1,50,0000",
            'category'   =>"mobile",
            'gallery'    =>"https://cdn.shopify.com/s/files/1/0586/4577/4429/products/ 
                            2_10659e72-7b12-4a5b-96d1-e8087b3fd457.png?v=1668851812",
            'description'=>"Apple will release a purple version of the iPhone 13 Pro and Pro Max."
            ],

            [
            'name'       =>'OPPO Mobile',
            'price'      =>"30000",
            'category'   =>"mobile",
            'gallery'    =>"https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/
                            81JLm5d17JL._SX679_.jpg",
            'description'=>"Dual Sim, 3G, 4G, 5G, VoLTE, Wi-Fi, NFC."
            ],

            [
            'name'       =>'REAL-ME TV',
            'price'      =>"50,000",
            'category'   =>"Tv",
            'gallery'    =>"https://encrypted-tbn0.gstatic.com/
                           images?q=tbn:ANd9GcRGt5HtJZyRc1fO4CkyNQWhBeo4unCA1Afb-g&usqp=CAU",
            'description'=>"Super and good 4k tv full 4k and sound is good best quality product "
            ]


        ]);
    }
}
