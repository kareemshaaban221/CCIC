<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Student::factory()->count(100)->create();
        Teacher::factory()->count(100)->create();
        Admin::create([
            'email' => 'superadmin@ccic.com',
            'password' => bcrypt('a123456'),
            'name' => 'Super admin [Ahmed]',
        ]);
    }
}
