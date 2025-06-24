<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Sinau CMS - Platform Digital untuk Sekolah Dasar</title>
    <meta name="description"
        content="Sinau CMS adalah platform digital modern untuk sekolah dasar, menyediakan sistem manajemen konten, fitur PMB, galeri, dan integrasi media sosial.">


    <meta name="robots" content="index, follow">
    <meta name="author" content="Sinau CMS Team">


    <meta property="og:title" content="Sinau CMS - Platform Digital untuk Sekolah Dasar">
    <meta property="og:description"
        content="Digitalisasi sekolah dasar lebih mudah dengan Sinau CMS. Kelola konten, PMB, dan interaksi online dengan mudah.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.sinaucms.web.id">
    <meta property="og:image" content="https://www.sinaucms.web.id/images/cover.png">


    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Sinau CMS - Platform Digital untuk Sekolah Dasar">
    <meta name="twitter:description"
        content="Platform modern untuk website sekolah dasar. Termasuk sistem PMB dan konten edukatif.">
    <meta name="twitter:image" content="https://www.sinaucms.web.id/images/cover.png">

    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="canonical" href="https://www.sinaucms.web.id">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <style>
        :root {
            --primary: #4F46E5;
            --secondary: #10B981;
            --dark: #1F2937;
            --light: #F9FAFB;
            --accent: #FBBF24;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light);
            color: var(--dark);
        }

        .gradient-bg {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1),
                0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: var(--primary);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .feature-icon {
            transition: all 0.3s ease;
        }

        .feature-card:hover .feature-icon {
            transform: scale(1.1);
            color: var(--primary);
        }

        .floating {
            animation: floating 6s ease-in-out infinite;
        }

        @keyframes floating {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }

            100% {
                transform: translateY(0px);
            }
        }
    </style>
</head>
