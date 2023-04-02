<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(["name"=>"User"]);
        $role2 = Role::create(["name"=>"Admin"]);

        Permission::create(["name"=>"users.index"])->syncRoles($role2);
        Permission::create(["name"=>"users.edit"])-> syncRoles($role2);
        Permission::create(["name"=>"users.update"])->syncRoles($role2);
    }
}
