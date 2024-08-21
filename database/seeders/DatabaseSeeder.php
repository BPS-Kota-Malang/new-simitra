<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// boh su
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersSeeder::class,
            TeamsSeeder::class,
            EmployeesSeeder::class,
            FaqsSeeder::class,
            MitrasSeeder::class,
            PaymentTypesSeeder::class,
            SurveysSeeder::class,
            TransactionsSeeder::class,
        ]);
    }
}
