<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('products')->insert(
            [
                'id'    =>'1',
                'head'  =>'Blended to Perfection',
                'header'=>'Coffees & Teas',
                'image' =>'assets/img/products-01.jpg',
                'desc'  =>'We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it\'s our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more.'
            ]
            );
            DB::table('products')->insert(
                [
                    'id'    =>'2',
                    'head'  =>'Delicious Treats, Good Eats',
                    'header'=>'Bakery & Kitchen',
                    'image' =>'assets/img/products-02.jpg',
                    'desc'  =>'Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.'
                ]
                );
                DB::table('products')->insert(
                    [
                        'id'    =>'3',
                        'head'  =>'From Around the World',
                        'header'=>'Bulk Speciality Blends',
                        'image' =>'assets/img/products-03.jpg',
                        'desc'  =>'Travelling the world for the very best quality coffee is something take pride in. When you visit us, you\'ll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details.'
                    ]
                    );
    }
}
