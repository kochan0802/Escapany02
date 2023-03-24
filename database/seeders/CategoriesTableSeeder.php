<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

    DB::table('categories')->insert([
      ['category_id' => '1', 'category_name' => 'やりたいことが見つからない'],
      ['category_id' => '2', 'category_name' => '起業したい'],
      ['category_id' => '3', 'category_name' => '副業を始めたい'],
      ['category_id' => '4', 'category_name' => '資格取得をしたい'],
      ['category_id' => '5', 'category_name' => 'パラレルワークを模索中'],
      ['category_id' => '6', 'category_name' => '海外移住したい'],
      ['category_id' => '7', 'category_name' => '自分に合った働きかたを考えたい'],
      ['category_id' => '8', 'category_name' => '新たな趣味を見つけたい'],
      ['category_id' => '9', 'category_name' => 'その他'],
    ]);

    }
}
