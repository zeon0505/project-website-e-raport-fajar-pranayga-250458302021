<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Masyarakat - Portal Resmi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --background: #000000;
            --foreground: #ffffff;
            --card: #1E1E2F;
            --card-foreground: #ffffff;
            --primary: #00FFEB;
            --primary-foreground: #000000;
            --secondary: #FF007F;
            --secondary-foreground: #000000;
            --muted: #4B5563;
            --border: #4B5563;
            --accent: #00FFEB;
        }

        .font-space { font-family: 'Space Grotesk', sans-serif; }
        .font-dm { font-family: 'DM Sans', sans-serif; }

        .neon-glow {
            box-shadow: 0 0 20px rgba(0, 255, 235, 0.5);
        }

        .neon-text {
            text-shadow: 0 0 10px rgba(0, 255, 235, 0.8);
        }

        .neon-pink {
            box-shadow: 0 0 20px rgba(255, 0, 127, 0.5);
        }

        .star {
            position: absolute;
            background: white;
            border-radius: 50%;
            animation: twinkle 2s infinite;
        }

        @keyframes twinkle {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 1; }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        @keyframes pulse-neon {
            0%, 100% { box-shadow: 0 0 20px rgba(0, 255, 235, 0.5); }
            50% { box-shadow: 0 0 30px rgba(0, 255, 235, 0.8); }
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .floating { animation: float 3s ease-in-out infinite; }
        .pulse-neon { animation: pulse-neon 2s ease-in-out infinite; }
        .rotate-slow { animation: rotate 20s linear infinite; }

        .bg-stars {
            background-image:
                radial-gradient(2px 2px at 20px 30px, #eee, transparent),
                radial-gradient(2px 2px at 40px 70px, rgba(255,255,255,0.8), transparent),
                radial-gradient(1px 1px at 90px 40px, #fff, transparent),
                radial-gradient(1px 1px at 130px 80px, rgba(255,255,255,0.6), transparent),
                radial-gradient(2px 2px at 160px 30px, #ddd, transparent);
            background-repeat: repeat;
            background-size: 200px 100px;
        }

        .gradient-border {
            background: linear-gradient(45deg, #00FFEB, #FF007F, #00FFEB);
            padding: 2px;
            border-radius: 12px;
        }

        .gradient-border-content {
            background: #1E1E2F;
            border-radius: 10px;
            padding: 1.5rem;
        }
    </style>
</head>
<body class="bg-black text-white font-dm overflow-x-hidden">
    <!-- Background Stars -->
    <div class="fixed inset-0 bg-stars opacity-30 pointer-events-none"></div>

    <!-- Floating Cosmic Elements -->
    <div class="fixed top-20 left-10 w-4 h-4 bg-cyan-400 rounded-full floating opacity-60"></div>
    <div class="fixed top-40 right-20 w-2 h-2 bg-pink-500 rounded-full floating opacity-80" style="animation-delay: 1s;"></div>
    <div class="fixed bottom-40 left-20 w-3 h-3 bg-cyan-300 rounded-full floating opacity-50" style="animation-delay: 2s;"></div>
    <div class="fixed bottom-20 right-40 w-2 h-2 bg-pink-400 rounded-full floating opacity-70" style="animation-delay: 0.5s;"></div>

    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-black/80 backdrop-blur-md border-b border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-cyan-400 to-pink-500 rounded-lg flex items-center justify-center rotate-slow">
                        <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <span class="font-space font-bold text-xl neon-text">Ngadu Ae</span>
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="#beranda" class="hover:text-cyan-400 transition-colors duration-300">Beranda</a>
                    <a href="#layanan" class="hover:text-cyan-400 transition-colors duration-300">Layanan</a>
                    <a href="#panduan" class="hover:text-cyan-400 transition-colors duration-300">Panduan</a>
                    <a href="#statistik" class="hover:text-cyan-400 transition-colors duration-300">Statistik</a>
                    <a href="#kontak" class="hover:text-cyan-400 transition-colors duration-300">Kontak</a>
                    <button class="bg-gradient-to-r from-cyan-400 to-pink-500 text-black px-4 py-2 rounded-lg font-semibold hover:shadow-lg hover:shadow-cyan-400/50 transition-all duration-300">
                        Masuk
                    </button>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button class="text-white hover:text-cyan-400 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="beranda" class="relative min-h-screen flex items-center justify-center pt-16">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/50 to-black"></div>

        <!-- Cosmic Background Elements -->
        <div class="absolute top-1/4 left-1/4 w-32 h-32 border border-cyan-400/30 rounded-full rotate-slow"></div>
        <div class="absolute bottom-1/4 right-1/4 w-24 h-24 border border-pink-500/30 rounded-full rotate-slow" style="animation-direction: reverse;"></div>

        <div class="relative z-10 text-center max-w-4xl mx-auto px-4">
            <h1 class="font-space font-bold text-5xl md:text-7xl mb-6 leading-tight">
                <span class="neon-text">Kami Mendengarkan Suara Rakyat</span><br>
                <span class="text-pink-500">Bukan Memakan Uang Rakyat</span>
            </h1>

            <p class="text-xl md:text-2xl text-gray-300 mb-8 max-w-2xl mx-auto leading-relaxed">
                Platform digital terpercaya untuk menyampaikan aspirasi dan keluhan masyarakat kepada pemerintah
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <button class="pulse-neon bg-gradient-to-r from-cyan-400 to-pink-500 text-black px-8 py-4 rounded-lg font-bold text-lg hover:scale-105 transition-transform duration-300">
                    Buat Pengaduan Sekarang
                </button>
                <button class="border-2 border-cyan-400 text-cyan-400 px-8 py-4 rounded-lg font-semibold hover:bg-cyan-400 hover:text-black transition-all duration-300">
                    Lacak Status Pengaduan
                </button>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-3 gap-8 mt-16 max-w-2xl mx-auto">
                <div class="text-center">
                    <div class="text-3xl font-bold text-cyan-400 neon-text">15,847</div>
                    <div class="text-gray-400">Pengaduan Selesai</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-pink-500">98.5%</div>
                    <div class="text-gray-400">Tingkat Kepuasan</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-cyan-400 neon-text">24/7</div>
                    <div class="text-gray-400">Layanan Aktif</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="layanan" class="py-20 relative">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="font-space font-bold text-4xl md:text-5xl mb-4 neon-text">Layanan Kami</h2>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                    Berbagai layanan pengaduan yang dapat membantu menyelesaikan permasalahan Anda
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="gradient-border hover:scale-105 transition-transform duration-300">
                    <div class="gradient-border-content">
                        <div class="w-16 h-16 bg-gradient-to-r from-cyan-400 to-pink-500 rounded-lg flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                            </svg>
                        </div>
                        <h3 class="font-space font-bold text-xl mb-3 text-center">Infrastruktur</h3>
                        <p class="text-gray-400 text-center">Laporkan kerusakan jalan, jembatan, fasilitas umum, dan infrastruktur lainnya</p>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="gradient-border hover:scale-105 transition-transform duration-300">
                    <div class="gradient-border-content">
                        <div class="w-16 h-16 bg-gradient-to-r from-pink-500 to-cyan-400 rounded-lg flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                            </svg>
                        </div>
                        <h3 class="font-space font-bold text-xl mb-3 text-center">Pelayanan Publik</h3>
                        <p class="text-gray-400 text-center">Keluhan terkait pelayanan di instansi pemerintah dan BUMN</p>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="gradient-border hover:scale-105 transition-transform duration-300">
                    <div class="gradient-border-content">
                        <div class="w-16 h-16 bg-gradient-to-r from-cyan-400 to-pink-500 rounded-lg flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h3 class="font-space font-bold text-xl mb-3 text-center">Kesehatan</h3>
                        <p class="text-gray-400 text-center">Pengaduan terkait layanan kesehatan dan fasilitas medis</p>
                    </div>
                </div>

                <!-- Service Card 4 -->
                <div class="gradient-border hover:scale-105 transition-transform duration-300">
                    <div class="gradient-border-content">
                        <div class="w-16 h-16 bg-gradient-to-r from-pink-500 to-cyan-400 rounded-lg flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                            </svg>
                        </div>
                        <h3 class="font-space font-bold text-xl mb-3 text-center">Pendidikan</h3>
                        <p class="text-gray-400 text-center">Masalah terkait fasilitas dan layanan pendidikan</p>
                    </div>
                </div>

                <!-- Service Card 5 -->
                <div class="gradient-border hover:scale-105 transition-transform duration-300">
                    <div class="gradient-border-content">
                        <div class="w-16 h-16 bg-gradient-to-r from-cyan-400 to-pink-500 rounded-lg flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h3 class="font-space font-bold text-xl mb-3 text-center">Keamanan</h3>
                        <p class="text-gray-400 text-center">Laporan terkait keamanan dan ketertiban masyarakat</p>
                    </div>
                </div>

                <!-- Service Card 6 -->
                <div class="gradient-border hover:scale-105 transition-transform duration-300">
                    <div class="gradient-border-content">
                        <div class="w-16 h-16 bg-gradient-to-r from-pink-500 to-cyan-400 rounded-lg flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h3 class="font-space font-bold text-xl mb-3 text-center">Lingkungan</h3>
                        <p class="text-gray-400 text-center">Pengaduan masalah lingkungan dan kebersihan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Guide Section -->
    <section id="panduan" class="py-20 bg-gray-900/50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="font-space font-bold text-4xl md:text-5xl mb-4 neon-text">Panduan Pengaduan</h2>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                    Ikuti langkah-langkah mudah untuk menyampaikan pengaduan Anda
                </p>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="text-center relative">
                    <div class="w-20 h-20 bg-gradient-to-r from-cyan-400 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-6 pulse-neon">
                        <span class="text-2xl font-bold text-black">1</span>
                    </div>
                    <h3 class="font-space font-bold text-xl mb-3">Daftar/Masuk</h3>
                    <p class="text-gray-400">Buat akun atau masuk ke sistem untuk memulai pengaduan</p>

                    <!-- Connector Line -->
                    <div class="hidden md:block absolute top-10 left-full w-full h-0.5 bg-gradient-to-r from-cyan-400 to-pink-500 opacity-30"></div>
                </div>

                <!-- Step 2 -->
                <div class="text-center relative">
                    <div class="w-20 h-20 bg-gradient-to-r from-pink-500 to-cyan-400 rounded-full flex items-center justify-center mx-auto mb-6 pulse-neon" style="animation-delay: 0.5s;">
                        <span class="text-2xl font-bold text-black">2</span>
                    </div>
                    <h3 class="font-space font-bold text-xl mb-3">Isi Form</h3>
                    <p class="text-gray-400">Lengkapi formulir pengaduan dengan detail yang jelas</p>

                    <!-- Connector Line -->
                    <div class="hidden md:block absolute top-10 left-full w-full h-0.5 bg-gradient-to-r from-pink-500 to-cyan-400 opacity-30"></div>
                </div>

                <!-- Step 3 -->
                <div class="text-center relative">
                    <div class="w-20 h-20 bg-gradient-to-r from-cyan-400 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-6 pulse-neon" style="animation-delay: 1s;">
                        <span class="text-2xl font-bold text-black">3</span>
                    </div>
                    <h3 class="font-space font-bold text-xl mb-3">Upload Bukti</h3>
                    <p class="text-gray-400">Sertakan foto atau dokumen pendukung jika ada</p>

                    <!-- Connector Line -->
                    <div class="hidden md:block absolute top-10 left-full w-full h-0.5 bg-gradient-to-r from-cyan-400 to-pink-500 opacity-30"></div>
                </div>

                <!-- Step 4 -->
                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-r from-pink-500 to-cyan-400 rounded-full flex items-center justify-center mx-auto mb-6 pulse-neon" style="animation-delay: 1.5s;">
                        <span class="text-2xl font-bold text-black">4</span>
                    </div>
                    <h3 class="font-space font-bold text-xl mb-3">Lacak Status</h3>
                    <p class="text-gray-400">Pantau perkembangan pengaduan Anda secara real-time</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section id="statistik" class="py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="font-space font-bold text-4xl md:text-5xl mb-4 neon-text">Statistik Pengaduan</h2>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                    Data transparansi penanganan pengaduan masyarakat
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="gradient-border text-center">
                    <div class="gradient-border-content">
                        <div class="text-4xl font-bold text-cyan-400 neon-text mb-2">25,847</div>
                        <div class="text-gray-400 mb-2">Total Pengaduan</div>
                        <div class="text-green-400 text-sm">↗ +12% bulan ini</div>
                    </div>
                </div>

                <div class="gradient-border text-center">
                    <div class="gradient-border-content">
                        <div class="text-4xl font-bold text-pink-500 mb-2">23,156</div>
                        <div class="text-gray-400 mb-2">Selesai Ditangani</div>
                        <div class="text-green-400 text-sm">↗ +8% bulan ini</div>
                    </div>
                </div>

                <div class="gradient-border text-center">
                    <div class="gradient-border-content">
                        <div class="text-4xl font-bold text-cyan-400 neon-text mb-2">2,691</div>
                        <div class="text-gray-400 mb-2">Dalam Proses</div>
                        <div class="text-yellow-400 text-sm">→ Stabil</div>
                    </div>
                </div>

                <div class="gradient-border text-center">
                    <div class="gradient-border-content">
                        <div class="text-4xl font-bold text-pink-500 mb-2">7 Hari</div>
                        <div class="text-gray-400 mb-2">Rata-rata Penyelesaian</div>
                        <div class="text-green-400 text-sm">↗ Lebih cepat 2 hari</div>
                    </div>
                </div>
            </div>

            <!-- Progress Bars -->
            <div class="mt-16 max-w-4xl mx-auto">
                <h3 class="font-space font-bold text-2xl mb-8 text-center">Kategori Pengaduan Terpopuler</h3>

                <div class="space-y-6">
                    <div>
                        <div class="flex justify-between mb-2">
                            <span>Infrastruktur</span>
                            <span class="text-cyan-400">35%</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-3">
                            <div class="bg-gradient-to-r from-cyan-400 to-pink-500 h-3 rounded-full" style="width: 35%"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between mb-2">
                            <span>Pelayanan Publik</span>
                            <span class="text-pink-500">28%</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-3">
                            <div class="bg-gradient-to-r from-pink-500 to-cyan-400 h-3 rounded-full" style="width: 28%"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between mb-2">
                            <span>Lingkungan</span>
                            <span class="text-cyan-400">22%</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-3">
                            <div class="bg-gradient-to-r from-cyan-400 to-pink-500 h-3 rounded-full" style="width: 22%"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between mb-2">
                            <span>Keamanan</span>
                            <span class="text-pink-500">15%</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-3">
                            <div class="bg-gradient-to-r from-pink-500 to-cyan-400 h-3 rounded-full" style="width: 15%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="kontak" class="py-20 bg-gray-900/50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="font-space font-bold text-4xl md:text-5xl mb-4 neon-text">Hubungi Kami</h2>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                    Butuh bantuan? Tim kami siap membantu Anda 24/7
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Contact Card 1 -->
                <div class="gradient-border text-center">
                    <div class="gradient-border-content">
                        <div class="w-16 h-16 bg-gradient-to-r from-cyan-400 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                        </div>
                        <h3 class="font-space font-bold text-xl mb-3">Telepon</h3>
                        <p class="text-gray-400 mb-2">Hotline 24/7</p>
                        <p class="text-cyan-400 font-semibold">0800-1234-5678</p>
                    </div>
                </div>

                <!-- Contact Card 2 -->
                <div class="gradient-border text-center">
                    <div class="gradient-border-content">
                        <div class="w-16 h-16 bg-gradient-to-r from-pink-500 to-cyan-400 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                        </div>
                        <h3 class="font-space font-bold text-xl mb-3">Email</h3>
                        <p class="text-gray-400 mb-2">Respon dalam 2 jam</p>
                        <p class="text-pink-500 font-semibold">info@pengaduanku.go.id</p>
                    </div>
                </div>

                <!-- Contact Card 3 -->
                <div class="gradient-border text-center">
                    <div class="gradient-border-content">
                        <div class="w-16 h-16 bg-gradient-to-r from-cyan-400 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h3 class="font-space font-bold text-xl mb-3">Live Chat</h3>
                        <p class="text-gray-400 mb-2">Chat langsung</p>
                        <button class="text-cyan-400 font-semibold hover:text-pink-500 transition-colors">Mulai Chat</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black border-t border-gray-800 py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <!-- Logo & Description -->
                <div class="md:col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-10 h-10 bg-gradient-to-r from-cyan-400 to-pink-500 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span class="font-space font-bold text-xl neon-text">PengaduanKu</span>
                    </div>
                    <p class="text-gray-400 mb-6 max-w-md">
                        Platform digital terpercaya untuk menyampaikan aspirasi dan keluhan masyarakat kepada pemerintah dengan sistem yang transparan dan akuntabel.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-cyan-400 hover:text-black transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-pink-500 hover:text-black transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-cyan-400 hover:text-black transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="font-space font-bold text-lg mb-6 text-cyan-400">Tautan Cepat</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Buat Pengaduan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Lacak Status</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Panduan</a></li>
                    </ul>
                </div>

                <!-- Legal -->
                <div>
                    <h3 class="font-space font-bold text-lg mb-6 text-pink-500">Legal</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Kebijakan Privasi</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Disclaimer</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Sitemap</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8 text-center">
                <p class="text-gray-400">
                    © 2024 PengaduanKu. Hak Cipta Dilindungi. Dikembangkan dengan ❤️ untuk masyarakat Indonesia.
                </p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button id="scrollTop" class="fixed bottom-8 right-8 w-12 h-12 bg-gradient-to-r from-cyan-400 to-pink-500 rounded-full flex items-center justify-center opacity-0 transition-all duration-300 hover:scale-110 z-50">
        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
        </svg>
    </button>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Scroll to top button
        const scrollTopBtn = document.getElementById('scrollTop');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                scrollTopBtn.style.opacity = '1';
            } else {
                scrollTopBtn.style.opacity = '0';
            }
        });

        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Add more stars dynamically
        function createStars() {
            const starsContainer = document.querySelector('.bg-stars');
            for (let i = 0; i < 50; i++) {
                const star = document.createElement('div');
                star.className = 'star';
                star.style.left = Math.random() * 100 + '%';
                star.style.top = Math.random() * 100 + '%';
                star.style.width = Math.random() * 3 + 1 + 'px';
                star.style.height = star.style.width;
                star.style.animationDelay = Math.random() * 2 + 's';
                document.body.appendChild(star);
            }
        }

        // Initialize stars
        createStars();

        // Mobile menu toggle (basic implementation)
        const mobileMenuBtn = document.querySelector('.md\\:hidden button');
        if (mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', () => {
                // Add mobile menu functionality here
                console.log('Mobile menu clicked');
            });
        }
    </script>
</body>
</html>
