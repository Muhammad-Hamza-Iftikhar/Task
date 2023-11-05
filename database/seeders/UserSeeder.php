<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::where('name','User')->first();
        $admin = User::create([
            'name' => 'User1',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        $admin->assignRole([$role->id]);
    }
}
