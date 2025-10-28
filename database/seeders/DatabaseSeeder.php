<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Laporan;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User Admin
$admin = User::create([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'no_whatsapp' => '082325364176',
                'alamat' => 'jonggol',
                'foto' => 'admin.jpg',
                'role' => 'admin',
            ]);

            //User Warga
            $warga = User::created([
                'name' => 'Warga',
                'email' => 'warga@gmail.com',
                'password' => Hash::make('warga'),
                'no_whatsapp' => '082325364176',
                'alamat' => 'jonggol',
                'foto' => 'warga.jpg',
                'role' => 'warga',
            ]);

            //Laporan
            $laporan = Laporan::create([
                'judul' => 'Laporan',
                'detail' => 'Laporan',
                'tanggal' => now(),
                'foto' => 'laporan.jpg',
                'status' => 'pending',
                'pelapor_id' => $admin->id,
            ]);
    }
}
