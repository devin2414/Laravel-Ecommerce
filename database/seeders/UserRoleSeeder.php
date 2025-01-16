<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat role admin dan user
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // Buat admin
        $admin = User::firstOrCreate(
            ['email' => 'depinpin24@gmail.com'], // Pastikan email tidak berubah
            [
                'name' => 'admin',
                'password' => bcrypt('password'), // Ganti dengan password yang lebih aman
            ]
        );

        // Cek apakah admin sudah memiliki role admin
if (!$admin->hasRole('admin')) {
    $admin->assignRole('admin');
}
        // Buat user biasa
        $user = User::firstOrCreate(
            ['email' => 'abelgacor@gmail.com'], // Pastikan email tidak berubah
            [
                'name' => 'Senopati',
                'password' => bcrypt('abelgacor'), // Ganti dengan password yang lebih aman
            ]
        );
        // Menetapkan role user ke user biasa
        $user->assignRole($adminRole);

        $this->command->info('Admin and User accounts have been created.');
    }
}

