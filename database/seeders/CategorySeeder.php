<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Residential Construction', 'status' => 1],
            ['name' => 'Commercial Construction', 'status' => 1],
            ['name' => 'Industrial Construction', 'status' => 1],
            ['name' => 'Infrastructure Construction', 'status' => 1],
            ['name' => 'Environmental Construction', 'status' => 1],
            ['name' => 'Remodeling', 'status' => 1],
            ['name' => 'Design and Build', 'status' => 1],
            ['name' => 'General Contracting', 'status' => 1],
            ['name' => 'Subcontracting', 'status' => 1],
            ['name' => 'Specialty Construction', 'status' => 1],
        ];

        foreach ($categories as $category) {
            Category::query()->create($category);
        }
    }
}
