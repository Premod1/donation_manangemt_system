<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::firstOrCreate(['name' => 'Admin']);
        $donatorRole = Role::firstOrCreate(['name' => 'Donator']);

        // Create admin user
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            ['name' => 'Admin User', 'password' => bcrypt('password')]
        );
        $admin->assignRole($adminRole);

        $donator = User::firstOrCreate(
            ['email' => 'donator@example.com'],
            ['name' => 'Donator User', 'password' => bcrypt('password')]
        );
        $donator->assignRole($donatorRole);
    }
}
