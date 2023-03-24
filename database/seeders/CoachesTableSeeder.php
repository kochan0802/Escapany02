<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CoachesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coaches')->delete();

        $faker = Faker::create('ja_JP');

        $category = ['1', '2', '3', '4', '5', '6', '7', '8', '9'];

        $personality = ['建築家','論理学者','指揮官','討論者','提唱者','仲介者','主唱者','広報運動家',
        '管理者','擁護者','幹部','領事館','巨匠','冒険家','起業家','エンターテイナー'];
        
        $stars = ['1', '2', '3', '4', '5'];

        for ($i = 0; $i < 20; $i++) {
            DB::table('coaches')->insert([
                'category_id' => $faker->randomElement($category),
                'profile_image' => 'default.png',
                'name' => $faker->name(),
                'personalities'=> $faker->randomElement($personality),
                'license' => $faker->sentence(),
                'career' => $faker->paragraph(),
                'stars' => $faker->randomNumber($stars),
                'comment' => $faker->paragraph(),
            ]);
        }
    }
}
