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
        # User array, indexed by user_id
        $users = [
            1 => ['admin','member'],
            2 => ['member']
        ];

        foreach ($users as $index => $roles) {
            $user = User::where('id', '=', $index)->first();
            foreach ($roles as $roleName) {
                $role = Role::where('name', '=', $roleName)->first();
                $user->roles()->save($role);
            }
        }
    }
}
