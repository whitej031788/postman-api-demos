<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsurancePlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('insurance_plans')->insert([
            [
                'name' => 'Home Insurance',
                'coverage' => 'Fire and Theft',
            ],
            [
                'name' => 'Life Insurance',
                'coverage' => 'Family Coverage',
            ],
            [
                'name' => 'Critical illness cover',
                'coverage' => 'Full Coverage',
            ],
            [
                'name' => 'Car insurance',
                'coverage' => 'Third Party',
            ],
            [
                'name' => 'Van Insurance',
                'coverage' => 'Third Party',
            ],
            [
                'name' => 'Car insurance',
                'coverage' => 'Full Coverage',
            ],
            [
                'name' => 'Van Insurance',
                'coverage' => 'Full Coverage',
            ]
        ]);
    }
}
