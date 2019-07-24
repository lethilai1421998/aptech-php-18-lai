<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 20; $i++) {
            DB::table('articles')->insert([
                'title' => $faker->sentence,
                'slug' => $faker->slug,
                'description' => $faker->text($maxNbChars = 15),
                'picture' => $faker->imageUrl($width = 640, $height = 480),
                'view' => $faker->numberBetween($min = 100, $max = 10000),
                'content' => $faker->text,
            ]);
        };
    }
}
