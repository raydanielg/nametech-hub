<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::where('email', 'admin@namtech.hub')->first();

        if (!$admin) {
            $admin = User::create([
                'id' => (string) Str::uuid(),
                'email' => 'admin@namtech.hub',
                'first_name' => 'Malkia',
                'last_name' => 'Admin',
                'password' => Hash::make('password'),
                'role' => 'super_admin',
                'status' => 'active',
                'email_verified' => true,
            ]);
        }

        $admin->assignRole('super_admin');
    }
}
