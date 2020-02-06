<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;


class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 1; $i<=5;$i++){
            User::create(array(
                'name' => $faker->name,
            ));
        }
    }
}
