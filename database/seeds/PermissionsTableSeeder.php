<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	Permission::create(['user_id' => 1, 'door_id' => 1,]);
        	Permission::create(['user_id' => 2, 'door_id' => 2]);
        	Permission::create(['user_id' => 3, 'door_id' => 1]);
            Permission::create(['user_id' => 3, 'door_id' => 2]);
        
    }
}
