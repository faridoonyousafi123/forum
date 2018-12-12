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
                
            'name' => 'Faridoon Yousafi',
            'password' => bcrypt('admin'),
            'email' => 'admin@admin.com',
            'admin' => 1,
            'avatar' => 'avatars/admin.jpg'
        ]);

        App\User::create([
                
            'name' => 'Kati Frantz',
            'password' => bcrypt('admin'),
            'email' => 'faridoon@faridoon.com',
            'avatar' => 'avatars/user.jpg'
        ]);

        App\User::create([
                
            'name' => 'Jhon Wick',
            'password' => bcrypt('admin'),
            'email' => 'jhon@jhon.com',
            'avatar' => 'avatars/user1.jpg'
        ]);

        App\User::create([
                
            'name' => 'Adam Smith',
            'password' => bcrypt('admin'),
            'email' => 'adam@adam.com',
            'admin' => 1,
            'avatar' => 'avatars/user2.jpg'
        ]);

        App\User::create([
                
            'name' => 'Siawash Kasra',
            'password' => bcrypt('admin'),
            'email' => 'siawash@siawash.com',
            'avatar' => 'avatars/user3.jpg'
        ]);

        App\User::create([
                
            'name' => 'Brad Pitt',
            'password' => bcrypt('admin'),
            'email' => 'brad@brad.com',
            'avatar' => 'avatars/user4.jpg'
        ]);
    }
}
