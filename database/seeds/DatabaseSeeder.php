<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // DB::table('users')->insert([
        //     'name' => str_random(10),
        //     'email' => str_random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        // ]);

        // DB::table('products')->insert([
        //     'name' => str_random(10),
        //     'price' => rand(1, 1000),
        //     'description' => str_random(20),
        //     'category_id' => 5,

        // ]);

        DB::table('categories')->insert([
            'name' => str_random(10),
            'description' => str_random(20),

        ]);
       
    }
}
