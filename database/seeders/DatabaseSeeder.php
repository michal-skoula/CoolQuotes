<?php

namespace Database\Seeders;

use App\Models\Quote;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\UniqueConstraintViolationException;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
		User::factory()
			->count(10)
			->has(
				Quote::factory()->count(10)
			)
			->create();


	}
}
