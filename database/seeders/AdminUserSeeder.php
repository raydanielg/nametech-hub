<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::updateOrCreate(
            ['email' => 'admin@namtech.hub'],
            [
                'name' => 'Malkia Admin',
                'password' => Hash::make('password'),
            ]
        );

        $admin->assignRole('super_admin');
    }
}
