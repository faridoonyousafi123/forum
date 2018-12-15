<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Profile::create([

            'user_id' => 1,
            'facebook' => 'https://www.facebook.com/faridoonyousafi',
            'twitter' => 'https://www.twitter.com/faridoonyousafi',
            'github' => 'https://www.github.com/faridoonyousafi123',
            'about' => 'Pasionate Afghan Web developer living in Kabul, Afghanistan',
            'company' => 'Netlinks',
            'title' => 'System Analyst',
            'city' => 'Kabul',
            'country' => 'Afghanistan'


        ]);
    }
}
