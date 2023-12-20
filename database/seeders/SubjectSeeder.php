<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subjects')->insert([
            'subject'=> 'Calculus',
            'lecturer' => 'Mr. Calculus'
        ]);

        DB::table('subjects')->insert([
            'subject'=> 'Algorithm & Programming',
            'lecturer' => 'Mr. Algo'
        ]);

        DB::table('subjects')->insert([
            'subject'=> 'Data Science',
            'lecturer' => 'Mrs. Data Science'
        ]);

        DB::table('subjects')->insert([
            'subject'=> 'Program Design Methods',
            'lecturer' => 'Ms. PDM'
        ]);

        DB::table('subjects')->insert([
            'subject'=> 'Discrete Mathematics',
            'lecturer' => 'Mr. DisMath'
        ]);


        // Subject::factory()->make();
    }
}
