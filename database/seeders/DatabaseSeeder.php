<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       Contact::factory()->count(10)->create();
    }
}
