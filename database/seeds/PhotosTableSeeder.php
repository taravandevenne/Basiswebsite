<?php

use App\Photo;
use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Photo::create([
            'file' => 'tattoo1.jpg',
        ]);

        Photo::create([
            'file' => 'tattoo2.jpg',
        ]);

        Photo::create([
            'file' => 'tattoo3.jpg',
        ]);

        Photo::create([
            'file' => 'tattoo4.jpg',
        ]);

        Photo::create([
            'file' => 'tattoo5.jpg',
        ]);

        Photo::create([
            'file' => 'tattoo6.jpg',
        ]);

        Photo::create([
            'file' => 'tattoo7.jpg',
        ]);

        Photo::create([
            'file' => 'tattoo8.jpg',
        ]);

        Photo::create([
            'file' => 'tattoo9.jpg',
        ]);

        Photo::create([
            'file' => 'tattoo10.jpg',
        ]);

        Photo::create([
            'file' => 'tattoo11.jpg',
        ]);

        Photo::create([
            'file' => 'tattoo12.jpg',
        ]);
    }
}
