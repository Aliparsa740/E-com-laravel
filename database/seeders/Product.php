<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'A21',
                'price'=>'500$',
                'catagory'=>'smartphone',
                'describtion'=>'for every thing ',
                'gallary'=>'\img\1(1).png',
            ],
            [
                'name'=>'Nokia',
                'price'=>'50$',
                'catagory'=>'smartphone',
                'describtion'=>'use memory for extra storeg',
                'gallary'=>'\img\2.jpeg',
            ]
            ,[
                'name'=>'iphone 10',
                'price'=>'500$',
                'catagory'=>'smartphone',
                'describtion'=>'8gb ram 124gb harddesk 15mpx ',
                'gallary'=>'\img\4.jpeg',
            ]

        ]);

    }
}
