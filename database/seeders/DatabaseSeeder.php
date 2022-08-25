<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(LevelSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PassportInstallSeeder::class);
        $this->call(StudentClassSeeder::class);
        $this->call(PersonalStudentDetailSeeder::class);
        $this->call(HealthStudentInformationSeeder::class);
        $this->call(ResidenceStudentInformationSeeder::class);
        $this->call(GuardianStudentInformationSeeder::class);
        $this->call(PreviousEducationStudentInformationSeeder::class);
        $this->call(StudentSeeder::class);
    }
}
