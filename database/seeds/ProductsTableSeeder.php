<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'GLORIA HIGH LOGO SNEAKER"',
                'price'          => 91,                
                'created_at'     => '2020-08-16 15:31:45',
                'updated_at'     => '2020-08-16 15:31:45',
            ],
            [
                'id'             => 2,
                'name'           => 'CATE RIGID BAG"',
                'price'          => 94,                
                'created_at'     => '2020-08-16 15:31:45',
                'updated_at'     => '2020-08-16 15:31:45',
            ],
            [
                'id'             => 3,
                'name'           => 'GUESS CONNECT WATCH"',
                'price'          => 400,                
                'created_at'     => '2020-08-16 15:31:45',
                'updated_at'     => '2020-08-16 15:31:45',
            ],
            [
                'id'             => 4,
                'name'           => 'CHECK PRINT SHIRT"',
                'price'          => 113,                
                'created_at'     => '2020-08-16 15:31:45',
                'updated_at'     => '2020-08-16 15:31:45',
            ],
        ];

        Product::insert($users);
    }
}
