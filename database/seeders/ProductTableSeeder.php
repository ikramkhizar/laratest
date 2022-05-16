<?php

namespace Database\Seeders;

use App\Models\Product;
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
        $products = [
            [
                'user_id'    => 1,
                'name'       => 'Iphone 12 Pro',
                'price'      => 500,
                'created_at' => '2022-05-01 19:13:32',
                'updated_at' => '2022-05-01 19:13:32',
            ],
            [
                'user_id'    => 1,
                'name'       => 'Iphone 11 Pro',
                'price'      => 400,
                'created_at' => '2022-05-02 19:13:32',
                'updated_at' => '2022-05-02 19:13:32',
            ],
            [
                'user_id'    => 1,
                'name'       => 'Iphone 8',
                'price'      => 200,
                'created_at' => '2022-05-02 19:13:32',
                'updated_at' => '2022-05-02 19:13:32',
            ],
            [
                'user_id'    => 1,
                'name'       => 'Samsung A32',
                'price'      => 100,
                'created_at' => '2022-05-03 19:13:32',
                'updated_at' => '2022-05-03 19:13:32',
            ],
            [
                'user_id'    => 1,
                'name'       => 'Redmi Note 11',
                'price'      => 700,
                'created_at' => '2022-05-04 19:13:32',
                'updated_at' => '2022-05-04 19:13:32',
            ],
            [
                'user_id'    => 1,
                'name'       => 'Iphone XS MAX',
                'price'      => 1900,
                'created_at' => '2022-05-05 19:13:32',
                'updated_at' => '2022-05-05 19:13:32',
            ],
            [
                'user_id'    => 1,
                'name'       => 'Iphone 11 Pro Max',
                'price'      => 350,
                'created_at' => '2022-05-08 19:13:32',
                'updated_at' => '2022-05-08 19:13:32',
            ],
            [
                'user_id'    => 1,
                'name'       => 'Nokia 3310',
                'price'      => 70,
                'created_at' => '2022-05-09 19:13:32',
                'updated_at' => '2022-05-09 19:13:32',
            ],
            [
                'user_id'    => 1,
                'name'       => 'Apple Watch',
                'price'      => 30,
                'created_at' => '2022-05-11 19:13:32',
                'updated_at' => '2022-05-11 19:13:32',
            ],
            [
                'user_id'    => 1,
                'name'       => 'Iphone 13 Pro Backcover',
                'price'      => 30,
                'created_at' => '2022-05-12 19:13:32',
                'updated_at' => '2022-05-12 19:13:32',
            ],
            [
                'user_id'    => 1,
                'name'       => 'Iphone 3',
                'price'      => 510,
                'created_at' => '2022-05-13 19:13:32',
                'updated_at' => '2022-05-13 19:13:32',
            ],
            [
                'user_id'    => 1,
                'name'       => 'Iphone 4 Pro',
                'price'      => 600,
                'created_at' => '2022-05-14 19:13:32',
                'updated_at' => '2022-05-14 19:13:32',
            ],
            [
                'user_id'    => 1,
                'name'       => 'Iphone 12 Pro',
                'price'      => 800,
                'created_at' => '2022-05-15 19:13:32',
                'updated_at' => '2022-05-15 19:13:32',
            ],
            [
                'user_id'    => 1,
                'name'       => 'Iphone 14',
                'price'      => 9900,
                'created_at' => '2022-05-16 19:13:32',
                'updated_at' => '2022-05-16 19:13:32',
            ],
        ];

        Product::insert($products);
    }
}
