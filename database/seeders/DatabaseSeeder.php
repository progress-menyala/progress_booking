<?php

namespace Database\Seeders;

use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        if (User::count() === 0) {
            // Tabel kosong, lakukan sesuatu di sini, seperti menambahkan data
            $user = User::create([
                'name' => 'Admin Trekker',
                'email' => 'admin@trekker.progress-stikombali.org.com',
                'phone' => '08192819281212',
                'password' => bcrypt('password'),
                'email_verified_at' => Carbon::now(),
            ]);
    
            // Tambahan: Anda juga dapat menggunakan metode factory untuk menambahkan data sejumlah tertentu
            // factory(YourModel::class, 10)->create();
        } else {
            // Tabel tidak kosong, lakukan sesuatu jika diperlukan
            if (!User::where('email', 'admin@trekker.progress-stikombali.org.com')->exists()) {
                $user = User::create([
                    'name' => 'Admin Trekker',
                    'email' => 'admin@trekker.progress-stikombali.org.com',
                    'phone' => '08192819281212',
                    'password' => bcrypt('password'),
                    'email_verified_at' => Carbon::now(),
                ]);
            }
        }
    }
}
