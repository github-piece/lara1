<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
         Model::unguard();
         DB::statement('SET FOREIGN_KEY_CHECKS=0');
         DB::table('users')->truncate();

         $users = [
            [
                'name' => 'Admin',
                'role' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('secret'),
                'remember_token' => str_random(10),
            ],
            [
                'name' => 'User',
                'role' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('secret'),
                'remember_token' => str_random(10),
            ],
         ];

         foreach ($users as $user) {
            User::create($user);
         }

         DB::statement('SET FOREIGN_KEY_CHECKS=1');
         Model::reguard();
     }
}
