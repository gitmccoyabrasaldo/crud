<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Employee::create([
            'name' => 'John Doe',
            'surname' => 'Doe',
            'address' => '123 Main Street',
            'phone' => '1234567890',
            'status' => 'active',
            'position' => 'Astronaut',
            'type' => 'Regular',
        ]);

        Employee::create([
            'name' => 'Jane Smith',
            'surname' => 'Smith',
            'address' => '456 Elm Street',
            'phone' => '9876543210',
            'status' => 'active',
            'position' => 'Network',
            'type' => 'OJT',
        ]);

        Employee::create([
            'name' => 'Joshua',
            'surname' => 'Gonzales',
            'address' => '123 Yama Street',
            'phone' => '9876543210',
            'status' => 'active',
            'position' => 'Web Developer',
            'type' => 'OJT',
        ]);

        Employee::create([
            'name' => 'Paolo',
            'surname' => 'Onlano',
            'address' => '655 Bacoor',
            'phone' => '9876543210',
            'status' => 'active',
            'position' => 'Software Developer',
            'type' => 'OJT',
        ]);
    }
};
