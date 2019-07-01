<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        {
            DB::table('users')->insert([
                'name' => $faker->lastName,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
            ]);
        }
    }
}
