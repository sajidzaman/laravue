<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();

        $limit = 45;
        for($i=0; $i< $limit;$i++) {
            DB::table('posts')->insert([
                'content' => $faker->text,
                'title' => $faker->sentence,
                'status' => 'PUBLISHED',
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime()
            ]);
        }
    }
}
