<?php

use App\Tattoo;
use Illuminate\Database\Seeder;

class TattoosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tattoo::create([
        'name' => 'Tattoo A',
        'artist_id' => '1',
        'price' => '100',
        'advance_id' => '1',
        'photo_id' => '1',
        ]);

        Tattoo::create([
            'name' => 'Tattoo B',
            'artist_id' => '2',
            'price' => '200',
            'advance_id' => '2',
            'photo_id' => '2',
        ]);

        Tattoo::create([
            'name' => 'Tattoo C',
            'artist_id' => '3',
            'price' => '300',
            'advance_id' => '3',
            'photo_id' => '3',
        ]);

        Tattoo::create([
            'name' => 'Tattoo D',
            'artist_id' => '4',
            'price' => '100',
            'advance_id' => '1',
            'photo_id' => '4',
        ]);

        Tattoo::create([
            'name' => 'Tattoo E',
            'artist_id' => '2',
            'price' => '200',
            'advance_id' => '2',
            'photo_id' => '5',
        ]);

        Tattoo::create([
            'name' => 'Tattoo F',
            'artist_id' => '3',
            'price' => '300',
            'advance_id' => '3',
            'photo_id' => '6',
        ]);

        Tattoo::create([
            'name' => 'Tattoo G',
            'artist_id' => '1',
            'price' => '100',
            'advance_id' => '1',
            'photo_id' => '7',
        ]);

        Tattoo::create([
            'name' => 'Tattoo H',
            'artist_id' => '2',
            'price' => '200',
            'advance_id' => '2',
            'photo_id' => '8',
        ]);

        Tattoo::create([
            'name' => 'Tattoo I',
            'artist_id' => '2',
            'price' => '300',
            'advance_id' => '3',
            'photo_id' => '9',
        ]);

        Tattoo::create([
            'name' => 'Tattoo J',
            'artist_id' => '1',
            'price' => '300',
            'advance_id' => '1',
            'photo_id' => '10',
        ]);

        Tattoo::create([
            'name' => 'Tattoo K',
            'artist_id' => '3',
            'price' => '300',
            'advance_id' => '2',
            'photo_id' => '11',
        ]);

        Tattoo::create([
            'name' => 'Tattoo L',
            'artist_id' => '1',
            'price' => '300',
            'advance_id' => '3',
            'photo_id' => '12',
        ]);
    }
}
