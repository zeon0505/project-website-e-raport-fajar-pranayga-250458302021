Portal Pengaduan Masyarakat - Galaxy Complaint System
Laravel Livewire PHP License

Sistem pengaduan masyarakat terdepan dengan teknologi galaxy untuk pelayanan publik yang lebih baik. Platform ini memungkinkan warga untuk melaporkan masalah-masalah di lingkungan mereka secara online dengan mudah, transparan, dan terpercaya.

✨ Fitur Utama
👥 Untuk Warga (Citizens)
Form Pengaduan Online - Interface yang user-friendly untuk mengajukan pengaduan
Upload Dokumen & Foto - Mendukung multiple file uploads
Tracking Status Real-time - Pantau progress pengaduan Anda
Dashboard Pribadi - Kelola semua pengaduan Anda
Notifikasi Update - Dapatkan update melalui berbagai channel
🏢 Untuk Admin
Dashboard Analytics - Statistik dan performa pelayanan publik
Manajemen Pengaduan - Kelola semua laporan masuk
Detail Laporan - Lihat detail lengkap setiap pengaduan
Manajemen Warga - Kelola data pengguna sistem
Update Status - Ubah status pengaduan (Pending → Proses → Selesai)
🎨 UI/UX Features
Galaxy Theme - Desain futuristik dengan efek kosmik
Responsive Design - Kompatibel dengan desktop, tablet, dan mobile
Real-time Updates - Livewire untuk interaksi tanpa reload
Modern Interface - Menggunakan Tailwind CSS
🛠 Tech Stack
Backend: Laravel 12 Framework
Frontend: Livewire 3.6, Tailwind CSS
Database: MySQL
Build Tool: Vite
Authentication: Laravel Sanctum
Testing: Pest PHP
📋 Prerequisites
PHP 8.2 atau lebih tinggi
Composer
Node.js & NPM
MySQL Database
Git
🚀 Instalasi
1. Clone Repository
git clone https://github.com/zeon0505/project-website-e-raport-fajar-pranayga-250458302021.git
cd aplikasi-pengaduan-masyarakat
2. Install Dependencies
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
3. Environment Setup
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
4. Database Setup
# Create database di MySQL
# Update konfigurasi database di .env file

# Run migrations
php artisan migrate

# Seed database (optional)
php artisan db:seed
5. Build Assets
# Build untuk production
npm run build

# Atau untuk development
npm run dev
6. Jalankan Aplikasi
# Jalankan server
php artisan serve

# Jalankan queue worker (untuk background jobs)
php artisan queue:work

# Jalankan Vite dev server (jika menggunakan npm run dev)
npm run dev
Aplikasi akan berjalan di http://localhost:8000

📖 Penggunaan
Registrasi & Login
Akses halaman utama
Klik "Masuk" untuk registrasi akun baru
Login dengan kredensial Anda
Untuk Warga
Buat Pengaduan Baru

Klik menu "Laporan" → "Buat Laporan"
Isi form: Judul, Detail, Tanggal, Upload Foto
Klik "Simpan"
Pantau Status Pengaduan

Akses menu "Laporan" untuk melihat semua pengaduan
Klik detail untuk melihat timeline progress
Untuk Admin
Dashboard Overview

Lihat statistik pengaduan
Monitor performa pelayanan
Kelola Pengaduan

Akses "List Laporan" untuk melihat semua pengaduan
Klik detail untuk melihat informasi lengkap
Update status pengaduan
🗄 Struktur Database
Tabel Utama
users
id - Primary key
name - Nama lengkap
email - Email unik
password - Password hash
timestamps
laporans
id - Primary key
judul - Judul pengaduan
detail - Deskripsi detail
tanggal - Tanggal kejadian
foto - Path file foto
status - Enum: pending, proses, selesai
pelapor_id - Foreign key ke users
timestamps
🧪 Testing
# Jalankan semua test
php artisan test

# Jalankan test dengan coverage
php artisan test --coverage
📱 API Endpoints
Aplikasi ini menggunakan Livewire untuk interaksi, namun juga menyediakan API endpoints untuk integrasi:

GET / - Halaman utama
GET /auth/register - Form registrasi
GET /auth/login - Form login
GET /admin/dashboard - Dashboard admin (auth required)
GET /warga/dashboard - Dashboard warga (auth required)
🤝 Contributing
Kami menerima kontribusi dari komunitas! Silakan ikuti langkah berikut:

Fork repository ini
Buat branch fitur baru (git checkout -b feature/AmazingFeature)
Commit perubahan (git commit -m 'Add some AmazingFeature')
Push ke branch (git push origin feature/AmazingFeature)
Buat Pull Request
Development Guidelines
Ikuti PSR-12 coding standards
Gunakan meaningful commit messages
Tambahkan tests untuk fitur baru
Update dokumentasi jika diperlukan
📄 License
Distributed under the MIT License. See LICENSE for more information.

👥 Tim Pengembang
Project Lead: Zeon
Frontend: Galaxy UI Team
Backend: Laravel Developers
Design: Galaxy Design Team
📞 Support
Jika Anda mengalami masalah atau memiliki pertanyaan:

Email: support@galaxyportal.id
Call Center: 0800-1234-GALAXY (425-2999)
Live Chat: Tersedia 24/7 di website
🙏 Acknowledgments
Laravel Framework - The PHP Framework for Web Artisans
Livewire - A full-stack framework for Laravel
Tailwind CSS - A utility-first CSS framework
Heroicons - Beautiful hand-crafted SVG icons
Made with ❤ for better public service by Galaxy Portal Team
