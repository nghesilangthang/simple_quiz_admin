<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0; $i<10; $i++)
        {
            $user = \App\UserModel::create([
                'username' => $faker->userName,
                'password' => $faker->md5,
                'full_name' => $faker->title.' '.$faker->name
            ]);
        }
    }
}
