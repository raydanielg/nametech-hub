<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $roles = [
            'super_admin' => 'Super Administrator',
            'hub_director' => 'Hub Director',
            'studio_director' => 'Studio Director',
            'programs_manager' => 'Programs Manager',
            'project_manager' => 'Project Manager',
            'mentor' => 'Mentor',
            'investor' => 'Investor',
            'startup_founder' => 'Startup Founder',
            'developer' => 'Developer',
            'designer' => 'Designer',
            'student' => 'Academy Student',
            'client' => 'Studio Client',
            'alumni' => 'Alumni',
        ];

        foreach ($roles as $roleId => $roleName) {
            Role::firstOrCreate(['name' => $roleId, 'guard_name' => 'web']);
        }

        // Create a default admin user if needed (optional here, better in UserSeeder)
    }
}
