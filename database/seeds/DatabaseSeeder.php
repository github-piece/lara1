<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     *
     * @return void
     */
    //Eloquent::unguard();
    public function run()
    {
        $this->call(UsersTableSeeder::class);
    }
}
