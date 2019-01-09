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
        $user = User::updateOrCreate(
            ['email' => 'jill@harvard.edu', 'name' => 'JillHarvard'],
            ['password' => Hash::make('helloworld')
            ]);

        $user = User::updateOrCreate(
            ['email' => 'jamal@harvard.edu', 'name' => 'JamalHarvard'],
            ['password' => Hash::make('helloworld')
            ]);

        $user = User::updateOrCreate(
            ['email' => 'caloggero.a@gmail.com', 'name' => 'acali'],
            ['password' => Hash::make('helloworld')]
        );
    }
}
