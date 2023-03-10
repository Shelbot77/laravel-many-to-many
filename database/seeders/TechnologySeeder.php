<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $technologies = ['html', 'css', 'js', 'Angular', 'VueJs', 'React', 'Laravel', 'PHP'];

        foreach ($technologies as $technologyName) {
            $technology = new Technology();
            $technology->name = $technologyName;
            $technology->save();
        }
    }
}
