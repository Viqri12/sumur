<?php

namespace Database\Seeders;

use App\Models\kepala;
use App\Models\mandor;
use App\Models\User as ModelsUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin12')
        ]);

        $kepala = User::create([
            'name' => 'Kepala',
            'email' => 'kepala@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin12')
        ]);

        $mandor = User::create([
            'name' => 'Mandor',
            'email' => 'mandor@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin12')
        ]);

        kepala::create([
            'nama' => $kepala->name,
            'user_id' => $kepala->id
        ]);

        mandor::create([
            'nama' => $mandor->name,
            'user_id' => $mandor->id
        ]);

        Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'kepala',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'mandor',
            'guard_name' => 'web'
        ]);

        Permission::create([
            'name' => 'dashboard view',
            'guard_name' => 'Dashboard_View'
        ]);



        $admin->assignRole('admin');
        $kepala->assignRole('kepala');
        $mandor->assignRole('mandor');
    }
}
