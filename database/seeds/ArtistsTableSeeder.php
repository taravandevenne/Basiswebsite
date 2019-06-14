<?php

use App\Artist;
use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artist::create([
            'name' => 'Artist 1',
            'style' => 'Stijl 1',
            'started' => '27/01/2019',
            'info' => 'Dit is de info',
        ]);

        Artist::create([
            'name' => 'Artist 2',
            'style' => 'Stijl 2',
            'started' => '28/01/2019',
            'info' => 'Dit is de info 2',
        ]);

        Artist::create([
            'name' => 'Artist 3',
            'style' => 'Stijl 3',
            'started' => '29/01/2019',
            'info' => 'Dit is de info 3',
        ]);
    }
}
