<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PolicyHolder;
use Database\Factories\PolicyHolderFactory;

class PolicyHolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PolicyHolder::factory()->count(100)->create();
    }
}
