<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Storage;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $userIds = User::pluck('id')->toArray(); // Get all user IDs
        $sampleImages = Storage::files('public/sample-images'); // Get all sample images

        for ($i = 0; $i < 50; $i++) {
            $project = Project::create([
                'user_id' => $faker->randomElement($userIds), // Assign random user ID
                'title' => $faker->sentence,
                'category_id' => $faker->numberBetween(1, 10), // Adjust as per your categories
                'min_price' => $faker->numberBetween(100, 500),
                'max_price' => $faker->numberBetween(500, 1000),
                'due_date' => $faker->dateTimeBetween('now', '+1 year'),
                'bid_end' => $faker->dateTimeBetween('now', '+1 month'),
                'details' => $faker->paragraph,
                'status' => 0,
                'contract' => $faker->randomElement(['full-time', 'part-time']),
                'duration' => $faker->numberBetween(1, 12) . ' months',
                'bid_status' => 0,
            ]);

            // Attach a random sample image to the project
            if (!empty($sampleImages)) {
                $randomImage = $faker->randomElement($sampleImages);
                $project->addMedia(storage_path('app/' . $randomImage))->toMediaCollection('images');
            }
        }
    }
}
