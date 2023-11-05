<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::where('name','Admin')->first();
        $admin = User::create([
            'name' => 'Admin1',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        $admin->assignRole([$role->id]);
    }
}
