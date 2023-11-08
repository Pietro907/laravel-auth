<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i <5 ; $i++) { 
            $proj = new Project();
            $proj->title = $faker->realText(10);
            $proj->description = $faker->realText(20);
            $proj->authors = $faker->name();
            $proj->slug = Str::slug($proj->title, '-');
            $proj->save();
        }
    }
}