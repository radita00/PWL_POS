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
        $this->call([
            LevelSeeder::class,      // seed m_level dulu
            UserSeeder::class,       // lalu m_user
            KategoriSeeder::class,   // HARUS sebelum BarangSeeder
            SupplierSeeder::class,   // HARUS sebelum BarangSeeder
            BarangSeeder::class,     // terakhir
        ]);
    }
}
