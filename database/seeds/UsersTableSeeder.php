<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
                
            'name' => 'admin',
            'password' => bcrypt('admin'),
            'email' => 'faridoon@faridoon.com',
            'admin' => 1,
            'avatar' => 'avatars/admin.jpg'
        ]);

        App\User::create([
                
            'name' => 'faridoon yousafi ',
            'password' => bcrypt('admin'),
            'email' => 'faridoon@gmail.com',
            'avatar' => 'avatars/user.jpg'
        ]);
    }
}
