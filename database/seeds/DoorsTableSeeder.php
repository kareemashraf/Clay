<?php

use Illuminate\Database\Seeder;
use App\Door;

class DoorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        // Door::truncate();

        $titles = ['Tunnel Door', 'Office Door'];

        foreach ($titles as $key => $value) {
        	Door::create([
                'name' => $value,
            ]);
        }
    }
}
