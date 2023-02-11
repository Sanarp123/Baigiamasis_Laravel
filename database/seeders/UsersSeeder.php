<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;
use illuminate\Support\Facades\Hash;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Superadmin',
            'email' => 'super@admin.lt',
            'password' => Hash::make('password')
        ]);

        $role = Role::find(1);

        $permission = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permission);
        $user->assignRole([$role->id]);
 
        //

        user::factory()->count(10)->create();
    }
}
