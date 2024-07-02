<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BidProject;
use App\Models\User;
use App\Models\Project;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Storage; // Make sure to include this line

class BidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $userIds = User::pluck('id')->toArray(); // Get all user IDs
        $projectIds = Project::pluck('id')->toArray(); // Get all project IDs
        $samplePdfs = Storage::files('public/bid-file'); // Get all sample PDF files

        foreach ($projectIds as $projectId) {
            $bidCount = $faker->numberBetween(5, 10); // Number of bids for each project

            for ($i = 0; $i < $bidCount; $i++) {
                $bidProject = BidProject::create([
                    'user_id' => $faker->randomElement($userIds),
                    'project_id' => $projectId,
                    'cover_letter' => $faker->paragraph,
                    'status' => 0,
                    'interviewing' => $faker->boolean,
                    'invite_sent' => $faker->boolean,
                    'rating' => $faker->numberBetween(1, 5),
                    'price' => $faker->randomFloat(2, 50, 100),
                    'fixed_rate' => $faker->randomFloat(2, 400, 900),
                    'service_fee' => 20,
                    'estimated_amount' => $faker->randomFloat(2, 50, 200),
                ]);

                // Attach a random sample PDF to the bid project
                if (!empty($samplePdfs)) {
                    $randomPdf = $faker->randomElement($samplePdfs);
                    $bidProject->addMedia(storage_path('app/' . $randomPdf))->preservingOriginal()->toMediaCollection('bid-files');
                }
            }
        }
    }
}
