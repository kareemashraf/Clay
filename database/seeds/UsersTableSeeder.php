<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <4 ; $i++) { 
        	User::create([
                'name' => "user".$i,
            ]);
        }
    }
}
