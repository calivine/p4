<?php

use Illuminate\Database\Seeder;

use App\Role;
use App\User;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            1 => 'admin',
            2 => 'mod'
        ];

        foreach ($roles as $index => $roleName) {
            $user = User::where('id', '=', $index)->first();
            $role = Role::where('name', '=', $roleName)->first();

            $user->roles()->save($role);
        }
    }
}
