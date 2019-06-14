<?php

use App\Advance;
use Illuminate\Database\Seeder;

class AdvancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Advance::create([
            'name' => 'Small tattoo',
            'range' => '€50 - €200',
            'amount' => '30',
        ]);

        Advance::create([
            'name' => 'Middle tattoo',
            'range' => '€200 - €700',
            'amount' => '50',
        ]);

        Advance::create([
            'name' => 'Big tattoo',
            'range' => '+ €700',
            'amount' => '100',
        ]);
    }
}
