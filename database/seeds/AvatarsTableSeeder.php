<?php

use App\Avatar;
use Illuminate\Database\Seeder;

class AvatarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Avatar::create([
            'file' => 'artist1.jpg',
        ]);
        Avatar::create([
            'file' => 'artist2.jpg',
        ]);
        Avatar::create([
            'file' => 'artist3.jpg',
        ]);
        Avatar::create([
            'file' => 'artist4.jpg',
        ]);
        Avatar::create([
            'file' => 'artist5.jpg',
        ]);
        Avatar::create([
            'file' => 'artist6.jpg',
        ]);
        Avatar::create([
            'file' => 'artist7.jpg',
        ]);
        Avatar::create([
            'file' => 'artist8.jpg',
        ]);
    }
}
