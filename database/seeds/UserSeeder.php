<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'John Lopez',
                'email' => 'john@gmail.com',
                'password' => Hash::make('123456')
            ]            
        ];

        foreach ($users as $user){
            \App\User::create($user);
        }
    }
}
