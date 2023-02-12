<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'user-view',
            'user-create',
            'user-edit',
            'user-delete',
            'permission-view',
            'role-view',
        ];
            foreach($permissions as $permission) {
                Permission::create(['name'=> $permission]);
            }
    }
}
