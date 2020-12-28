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
        DB::table('product')->insert([
            [
                'name'=>'cellphone',
                'price'=>'100$',
                'catagory'=>'cellphon',
                'describtion'=>'just for talking ',
                'gallary'=>'\img\3.jpeg',
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
                'gallary'=>'\img\4.jpg',
            ]

        ]);

    }
}
