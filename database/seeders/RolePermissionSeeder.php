<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
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
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        }

        $teacherRole = Role::firstOrCreate([
            'name' => 'teacher',
            'guard_name' => 'web',
        ]);

        $teacherRole->givePermissionTo([
            'view course',
            'create course',
            'edit course',
            'delete course',
        ]);

        $studentRole = Role::firstOrCreate([
            'name' => 'student',
            'guard_name' => 'web',
        ]);

        $studentRole->givePermissionTo([
        'view course',
        ]);

        // membuat role super admin
        $user = User::firstOrCreate(
            ['email' => 'fidly@teacher.com'],
            [
                'name' => 'fidly',
                'password' => bcrypt('12345678'),
            ]
        );

        $user->assignRole($teacherRole);

    }
}
