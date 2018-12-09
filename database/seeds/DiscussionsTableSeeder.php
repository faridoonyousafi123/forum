<?php

use Illuminate\Database\Seeder;
use App\Discussion;
class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dicussion1 = [
            'title' => 'PHP Authincation using Laravel',
            'content' => 'This is the demo seeders',
            'channel_id' => 1,
            'user_id' => 1,
            'slug' => str_slug('PHP Authincation using Laravel')
        ];
        $dicussion2 = [
            'title' => 'NODE JS functions and methods',
            'content' => 'This is the demo seeders',
            'channel_id' => 2,
            'user_id' => 1,
            'slug' => str_slug('NODE JS functions and methods')
        ];
        $dicussion3 = [
            'title' => 'Laravel with RESTful APIs',
            'content' => 'This is the demo seeders',
            'channel_id' => 3,
            'user_id' => 1,
            'slug' => str_slug('Laravel with RESTful APIs')
        ];
        $dicussion4 = [
            'title' => 'Adamwathan Authentication using Third party apps',
            'content' => 'This is the demo seeders',
            'channel_id' => 4,
            'user_id' => 1,
            'slug' => str_slug('Adamwathan Authentication using Third party apps')
        ];
        Discussion::create($dicussion1);
        Discussion::create($dicussion2);
        Discussion::create($dicussion3);
        Discussion::create($dicussion4);
    }
}
