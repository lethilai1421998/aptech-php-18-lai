<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $array =  ['Kinh tế', 'Văn Hóa', 'Xã Hội', 'Chính trị', 'Công nghệ', 'Khoa Học', 'Thời Trang', 'Giải Trí', 'Thể Thao'];
        for ($i = 0; $i < 9; $i++) {
            DB::table('categories')->insert([
                'name' => $array[$i]
            ]);
        };
    }
}
