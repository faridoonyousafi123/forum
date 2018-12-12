<?php

use Illuminate\Database\Seeder;

class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Like::create([

            'user_id' => 1,
            'discussion_id' => 1

        ]);

        App\Like::create([

            'user_id' => 2,
            'discussion_id' => 2

        ]);

        App\Like::create([

            'user_id' => 3,
            'discussion_id' => 3

        ]);
        App\Like::create([

            'user_id' => 1,
            'discussion_id' => 2

        ]);

        App\Like::create([

            'user_id' => 2,
            'discussion_id' => 3

        ]);

        App\Like::create([

            'user_id' => 3,
            'discussion_id' => 1

        ]);
        App\Like::create([

            'user_id' => 4,
            'discussion_id' => 2

        ]);

        App\Like::create([

            'user_id' => 5,
            'discussion_id' => 2

        ]);

        App\Like::create([

            'user_id' => 6,
            'discussion_id' => 2

        ]);
        App\Like::create([

            'user_id' => 6,
            'discussion_id' => 2

        ]);
        App\Like::create([

            'user_id' => 4,
            'discussion_id' => 1

        ]);
        App\Like::create([

            'user_id' => 3,
            'discussion_id' => 1

        ]);
    }
}
