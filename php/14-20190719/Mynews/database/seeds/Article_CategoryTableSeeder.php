<?php

use Illuminate\Database\Seeder;
use App\Article;
use App\Category;

class Article_CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = Article::pluck('id')->toArray();
        $categories = Category::pluck('id')->toArray();
        for ($i = 0; $i < 5; $i++) {
            $categoryIdRand = $categories[array_rand($categories)];
            $articleIdRand = $articles[array_rand($articles)];
            $checkExists = DB::table('article_category')->where('article_id', $articleIdRand)->where('category_id', $categoryIdRand)->exists();
            if (!$checkExists) {
                DB::table('article_category')->insert([
                    'article_id' => $articleIdRand,
                    'category_id' => $categoryIdRand,
                ]);
            };
        };
    }
}
