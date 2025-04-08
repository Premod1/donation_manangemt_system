<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'name' => 'Project A',
            'description' => 'Description of Project A',
            'target_amount' => 10000.00,
            'current_amount' => 5000.00,
            'start_date' => now(),
            'end_date' => now()->addMonths(3),
            'progress' => 50.00,
        ]);

        Project::create([
            'name' => 'Project B',
            'description' => 'Description of Project B',
            'target_amount' => 20000.00,
            'current_amount' => 10000.00,
            'start_date' => now(),
            'end_date' => now()->addMonths(6),
            'progress' => 50.00,
        ]);
    }
}
