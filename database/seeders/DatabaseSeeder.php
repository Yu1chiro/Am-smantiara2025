<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil seeder yang baru saja digenerate oleh iseed
        $this->call([
            UsersTableSeeder::class,
            ArticlesTableSeeder::class,
            MembersTableSeeder::class,
            CerpensTableSeeder::class,
        ]);
    }
}
