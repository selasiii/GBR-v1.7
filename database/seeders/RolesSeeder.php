<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class RolesSeeder extends Seeder
{
    public function run(): void
    {
        Role::create(['name' => 'admin', 'guard_name' => 'admin']);
        Role::create(['name' => 'agent', 'guard_name' => 'agent']);    }
}
