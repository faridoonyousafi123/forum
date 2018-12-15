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
            'slug' => str_slug('Faridoon Yousafi'),
            'avatar' => 'avatars/admin.jpg'
        ]);

        App\User::create([
                
            'name' => 'Kati Frantz',
            'password' => bcrypt('admin'),
            'email' => 'faridoon@faridoon.com',
            'slug' => str_slug('Kati Frantz'),
            'avatar' => 'avatars/user.jpg'
        ]);

        App\User::create([
           

            'name' => 'Jhon Wick',
            'password' => bcrypt('admin'),
            'email' => 'jhon@jhon.com',
            'slug' => str_slug('Jhon Wick'),
            'avatar' => 'avatars/user1.jpg'
        ]);

        App\User::create([
                
            'name' => 'Adam Smith',
            'password' => bcrypt('admin'),
            'email' => 'adam@adam.com',
            'admin' => 1,
            'slug' => str_slug('Kati Frantz'),
            'avatar' => 'avatars/user2.jpg'
        ]);

        App\User::create([
                
            'name' => 'Siawash Kasra',
            'password' => bcrypt('admin'),
            'email' => 'siawash@siawash.com',
            'slug' => str_slug('Adam Smith'),
            'avatar' => 'avatars/user3.jpg'
        ]);

        App\User::create([
                
            'name' => 'Brad Pitt',
            'password' => bcrypt('admin'),
            'email' => 'brad@brad.com',
            'slug' => str_slug('Brad Pitt'),
            'avatar' => 'avatars/user4.jpg'
        ]);
    }
}
