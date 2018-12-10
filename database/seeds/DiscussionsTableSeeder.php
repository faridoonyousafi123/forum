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
            'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'channel_id' => 1,
            'user_id' => 1,
            'slug' => str_slug('PHP Authincation using Laravel')
        ];
        $dicussion2 = [
            'title' => 'NODE JS functions and methods',
            'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
           
            'channel_id' => 2,
            'user_id' => 2,
            'slug' => str_slug('NODE JS functions and methods')
        ];
        $dicussion3 = [
            'title' => 'Laravel with RESTful APIs',
            'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            
            'channel_id' => 3,
            'user_id' => 1,
            'slug' => str_slug('Laravel with RESTful APIs')
        ];
        $dicussion4 = [
            'title' => 'Adamwathan Authentication using Third party apps',
            'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            
            'channel_id' => 4,
            'user_id' => 2,
            'slug' => str_slug('Adamwathan Authentication using Third party apps')
        ];
        Discussion::create($dicussion1);
        Discussion::create($dicussion2);
        Discussion::create($dicussion3);
        Discussion::create($dicussion4);
    }
}
