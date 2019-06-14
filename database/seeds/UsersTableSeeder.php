<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        'name' => 'Tara Vandevenne',
        'email' => 'taravandevenne@hotmail.com',
        'phone' => '0498846106',
        'role_id' => '1',
        'active' => '1',
        'password' => bcrypt('123456')
    ]);

        User::create([
            'name' => 'Test',
            'email' => 'test@hotmail.com',
            'phone' => '045687956',
            'role_id' => '2',
            'active' => '0',
            'password' => bcrypt('123456')
        ]);
    }
}
