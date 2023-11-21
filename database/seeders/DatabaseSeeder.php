<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use App\Models\Classroom;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Admin::factory()->create([
            'username' => 'admin',
            'password' => Hash::make('admin')
        ]);
        $this->seedTeacher();
        $this->seedClass();
    }

    private function seedTeacher(): void
    {

        Teacher::factory(10)->create();
    }

    private function seedClass(): void
    {
        Classroom::factory(10)->create();
    }
    private function seedStudent():void {
        Student::factory(10)->create();
    }
}
