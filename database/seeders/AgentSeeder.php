<?php


// database/seeders/AgentSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agent;
use Spatie\Permission\Models\Role;

class AgentSeeder extends Seeder
{
    public function run()
    {
        $agentRole = Role::where('name', 'agent')->first();

        $agent = Agent::create([
            'first_name' => 'Agent',
            'last_name' => 'User',
            'email' => 'agent@example.com',
            'password' => bcrypt('password'),
            'phone_number' => '233 420 69 1738',
        ]);

        $agent->assignRole($agentRole);
    }
}
