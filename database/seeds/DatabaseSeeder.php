<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ArtistsTableSeeder::class);
        $this->call(TattoosTableSeeder::class);
        $this->call(AdvancesTableSeeder::class);
        $this->call(AvatarsTableSeeder::class);
        $this->call(PhotosTableSeeder::class);
    }
}
