<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 6; $i++) {
            $project = new Project();
            $project->title = $faker->sentence(2);
            $project->content = $faker->text(250);
            $project->slug = Project::generateSlug($project->title);
            $project->save();
        }
    }
}
