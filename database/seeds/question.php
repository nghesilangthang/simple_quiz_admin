<?php

use Illuminate\Database\Seeder;

class question extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i=0; $i<100; $i++)
        {
            $question = \App\Question::create([
                'question' => $faker->text(300),
                'option_1' => $faker->text(100),
                'option_2' => $faker->text(100),
                'option_3' => $faker->text(100),
                'option_4' => $faker->text(100),
                'answer'   => $faker->numberBetween(1,4),
                'user_create' => $faker->numberBetween(1,10)
            ]);
        }
    }
}
