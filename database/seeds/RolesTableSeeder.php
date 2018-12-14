<?php

use Illuminate\Database\Seeder;

use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['admin', 'mod'];

        foreach ($roles as $roleName) {
            $role = new Role();
            $role->name = $roleName;
            $role->save();
        }
    }
}
