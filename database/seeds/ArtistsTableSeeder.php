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
            'avatar_id' => '1',
            'style' => 'Stijl 1',
            'started' => '27/01/2019',
            'info' => 'Dit is de info',
        ]);

        Artist::create([
            'name' => 'Artist 2',
            'avatar_id' => '2',
            'style' => 'Stijl 2',
            'started' => '28/01/2019',
            'info' => 'Dit is de info 2',
        ]);

        Artist::create([
            'name' => 'Artist 3',
            'avatar_id' => '3',
            'style' => 'Stijl 3',
            'started' => '29/01/2019',
            'info' => 'Dit is de info 3',
        ]);
        Artist::create([
            'name' => 'Artist 4',
            'avatar_id' => '4',
            'style' => 'Stijl 4',
            'started' => '30/01/2019',
            'info' => 'Dit is de info 4',
        ]);

        Artist::create([
            'name' => 'Artist 5',
            'avatar_id' => '5',
            'style' => 'Stijl 5',
            'started' => '31/01/2019',
            'info' => 'Dit is de info 5',
        ]);

        Artist::create([
            'name' => 'Artist 6',
            'avatar_id' => '6',
            'style' => 'Stijl 6',
            'started' => '01/02/2019',
            'info' => 'Dit is de info 6',
        ]);
        Artist::create([
            'name' => 'Artist 7',
            'avatar_id' => '7',
            'style' => 'Stijl 7',
            'started' => '02/02/2019',
            'info' => 'Dit is de info 7',
        ]);

        Artist::create([
            'name' => 'Artist 8',
            'avatar_id' => '8',
            'style' => 'Stijl 8',
            'started' => '03/02/2019',
            'info' => 'Dit is de info 8',
        ]);
    }
}
