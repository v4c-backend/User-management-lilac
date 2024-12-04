<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Designation;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $departments = Department::insert([
            ['name' => 'HR', 'created_at' => now()],
            ['name' => 'IT', 'created_at' => now()],
            ['name' => 'Finance', 'created_at' => now()],
            ['name' => 'Marketing', 'created_at' => now()],
        ]);
    
        $designations = Designation::insert([
            ['name' => 'Manager', 'created_at' => now()],
            ['name' => 'Engineer', 'created_at' => now()],
            ['name' => 'Analyst', 'created_at' => now()],
            ['name' => 'Executive', 'created_at' => now()],
        ]);
    
        User::insert([
            ['name' => 'Abhijith', 'phone_number' => '9656381233', 'department_id' => 1, 'designation_id' => 1, 'created_at' => now()],
            ['name' => 'Arun', 'phone_number' => '9876543210', 'department_id' => 2, 'designation_id' => 2, 'created_at' => now()],
            ['name' => 'Lily', 'phone_number' => '1122334455', 'department_id' => 3, 'designation_id' => 3, 'created_at' => now()],
            ['name' => 'Akhil', 'phone_number' => '5566778899', 'department_id' => 4, 'designation_id' => 4, 'created_at' => now()],
            ['name' => 'Ammu', 'phone_number' => '5566778899', 'department_id' => 4, 'designation_id' => 4, 'created_at' => now()],
            ['name' => 'Rahul', 'phone_number' => '5566778899', 'department_id' => 4, 'designation_id' => 4, 'created_at' => now()],


        ]);
    }
}
