<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('tasks')->insert([
            [
                'id' => 1,
                'name'=>'自己分析',
                'content'=>'自分の歴史年表を作る',
                'created_at' => '2023-03-15 12:11:11',
                'updated_at' => '2023-03-16 12:21:11',
            ],    
            
            [
                'id' => 2,
                'name' => 'Laravelを勉強',
                'content' => 'Laravel9が出たので、3時間勉強する',
                'created_at' => '2022-02-11 12:11:11',
                'updated_at' => '2022-02-13 14:22:33'
            ],
            [
                'id' => 3,
                'name' => 'ランニング',
                'content' => '新しいコースで10kmを目標に走る',
                'created_at' => '2022-02-11 12:11:11',
                'updated_at' => '2022-02-13 14:22:33'
            ],
            
        ]);
        
    }
}