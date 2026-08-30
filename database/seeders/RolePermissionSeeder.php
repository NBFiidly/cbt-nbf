<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $permissions = [
            'view course',
            'create course',
            'edit course',
            'delete course',
        ];

        foreach ($permissions as $permission) {
            \Spatie\Permission\Models\Permission::create(['name' => $permission]);
        }

        $teacherRole = Role::create([
            'name' => 'teacher',
        ]);

        $teacherRole->givePermissionTo([
            'view course',
            'create course',
            'edit course',
            'delete course',
        ]);

        $studentRole = Role::create([
        'name' => 'student',
        ]);

        $studentRole->givePermissionTo([
        'view course',
        ]);

        // membuat role super admin
        $user = User::create([
            'name' => 'fidly',
            'email' => 'fidly@teacher.com',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole($teacherRole);

    }
}
