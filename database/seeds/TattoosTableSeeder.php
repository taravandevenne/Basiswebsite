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
            'name' => 'Tattoo 1',
            'artist_id' => '1',
            'price' => '100',
            'advance_id' => '1',
        ]);

        Tattoo::create([
            'name' => 'Tattoo 2',
            'artist_id' => '2',
            'price' => '200',
            'advance_id' => '2',
        ]);

        Tattoo::create([
            'name' => 'Tattoo 3',
            'artist_id' => '3',
            'price' => '300',
            'advance_id' => '3',
        ]);
    }
}
