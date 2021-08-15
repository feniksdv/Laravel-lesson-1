<?php

namespace Database\Seeders;

use Exception;
use Faker\Factory;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        \DB::table('orders')->insert($this->getData());
    }

    /**
     * @throws Exception
     */
    public function getData() : array
    {
        $faker = Factory::create();
        $data = [];
        for($i=0; $i < 10; $i++) {
            $data[] = [
                'user_id' => random_int(1,10),
                'content' => $faker->text(),
                'status_id' => random_int(5,7),
            ];
        }

        return $data;
    }
}
