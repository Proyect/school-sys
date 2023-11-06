<?php

namespace Database\Seeders;

use App\Models\Student;
use Database\Factories\StudentFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::factory()->count(400)->create();
    }
}
