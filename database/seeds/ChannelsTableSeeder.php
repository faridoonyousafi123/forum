<?php

use Illuminate\Database\Seeder;
use App\Channel;
class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channel1 = ['title' => 'Php Testing'];
        $channel2 = ['title' => 'Php Learning'];
        $channel3 = ['title' => 'Laravel'];
        $channel4 = ['title' => 'Learn Vue JS'];
        $channel5 = ['title' => 'Python'];

        Channel::create($channel1);
        Channel::create($channel2);
        Channel::create($channel3);
        Channel::create($channel4);
        Channel::create($channel5);
        
    }
}
