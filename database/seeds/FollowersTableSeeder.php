<?php

use Illuminate\Database\Seeder;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Follower::create([
            
            'user_id' => 1,
            
        ]);

        App\Follower::create([

            'user_id' => 2,
            

        ]);

        App\Follower::create([

            'user_id' => 3,
           

        ]);

        App\Follower::create([

            'user_id' => 4,
            
        ]);
    }
}
