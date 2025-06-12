<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Sistem Informasi Manajemen (SIM) STIKES YKY Yogyakarta, memberikan akses mudah ke berbagai sistem informasi kampus.">
    <title>SIM STIKES YKY</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-CZwA8tj1.css') }}"> --}}
    @vite('resources/css/app.css')
    <style>
        /* Efek slide hanya untuk kartu loop-card */
        .loop-card {
            position: relative;
            overflow: hidden;
            background: #ffffff;
            /* Warna default */
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            transition: transform 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        .loop-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            /* Awalnya di luar */
            width: 100%;
            height: 100%;
            background: #C84C05;
            /* Warna indigo sebagai hover */
            transition: left 0.3s ease-in-out;
            z-index: 0;
        }

        .loop-card:hover::before {
            left: 0;
            /* Gradien masuk saat hover */
        }

        .loop-card .card-body {
            position: relative;
            z-index: 1;
            /* Konten di atas layer pseudo-element */
            color: #4f46e5;
            /* Warna teks default */
            transition: color 0.3s ease-in-out;
        }

        .loop-card:hover .card-body {
            color: #ffffff;
            /* Teks berubah putih saat hover */
        }
    </style>
</head>

<body>



    <div class="min-h-screen bg-gradient-to-r from-pink-300 via-indigo-100 to-teal-100 flex items-center justify-center"
        style="background-image: url('https://simyky.jimbling.my.id/escheresque.png'), linear-gradient(to right, #fbb6ce, #c3dafe, #81e6d9); background-size: 150px 150px, cover; background-repeat: repeat, no-repeat; background-blend-mode: overlay;">
        <div class="container mx-auto px-4 py-12">
            <!-- Grid utama, terpusat dan tidak penuh lebar halaman -->
            <div class="w-full max-w-2xl mx-auto flex flex-col items-center justify-start">

                <!-- Card Utama: untuk menampilkan kartu kecil secara vertikal -->
                <div class="card w-full bg-white shadow-xl rounded-lg overflow-hidden mb-10">
                    <div class="card-body p-8">
                        <h1 class="text-3xl font-bold text-gray-800 text-center">
                            Sistem Informasi Manajemen (SIM)
                        </h1>
                        <p class="text-gray-600 text-lg text-center mb-4">
                            STIKES YKY YOGYAKARTA
                        </p>

                        <!-- Kartu Tunggal -->
                        <div class="mb-8">
                            <a href="https://stikesyky.ac.id/"
                                class="group block transform hover:scale-105 transition-transform duration-300">
                                <div
                                    class="card bg-indigo-50 shadow-lg rounded-lg overflow-hidden border border-indigo-200 hover:shadow-2xl transition-shadow duration-300 flex items-center p-6">
                                    <div class="w-16 h-16 rounded-full overflow-hidden bg-gray-200 mr-4">
                                        <img src="https://labk3.jimbling.my.id/assets/dist/img/1735632154_b96781f217d6271fa3ec.png"
                                            alt="Icon" class="w-full h-full object-cover">
                                    </div>
                                    <div class="text-center md:text-left">
                                        <h2
                                            class="text-xl font-semibold text-indigo-700 group-hover:text-indigo-800 transition-colors duration-300">
                                            WEBSITE STIKES YKY YOGYAKARTA
                                        </h2>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Grid kartu data -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            @foreach ($sims as $sim)
                                <a href="{{ $sim->url }}"
                                    class="group block transform hover:scale-105 transition-transform duration-300">
                                    <div
                                        class="loop-card bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-200 hover:shadow-2xl">
                                        <div class="card-body p-4 flex items-center justify-center">
                                            <h2
                                                class="card-title text-xl font-semibold text-center transition-colors duration-300">
                                                {{ $sim->name }}
                                            </h2>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




</body>

</html>
