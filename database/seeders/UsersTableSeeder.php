<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'MD.Admin',

            'email' => 'admin@blog.com',
            'password' => bcrypt('rootadmin'),
        ]);

       \DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'MD.Author',

            'email' => 'author@blog.com',
            'password' => bcrypt('rootauthor'),
        ]);
    }
}
