<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'      =>  'Doctor Name',
                'tagline'      =>  'This is tagline',
                'about'      =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil labore magnam accusamus earum aspernatur doloribus dicta temporibus accusantium reiciendis corporis eaque, ab neque doloremque quas quam? Natus saepe facere cumque.',
                'email'     =>  'admin@test.com',
                'password'  =>  bcrypt('admin123')
            ]

        ]);
    }
}
