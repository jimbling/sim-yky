<div class="container mx-auto px-2 py-20 md:py-12 relative overflow-hidden">

    <!-- Floating elements with coordinated AOS -->
    <div class="absolute top-20 left-10 w-16 h-16 rounded-full bg-white/10 backdrop-blur-sm floating" data-aos="zoom-in"
        data-aos-delay="100" style="animation-delay: 0s;"></div>
    <div class="absolute bottom-1/4 right-20 w-24 h-24 rounded-full bg-white/5 backdrop-blur-sm floating"
        data-aos="zoom-in" data-aos-delay="300" style="animation-delay: 1s;"></div>
    <div class="absolute top-1/3 right-1/4 w-12 h-12 rounded-full bg-white/15 backdrop-blur-sm floating"
        data-aos="zoom-in" data-aos-delay="500" style="animation-delay: 2s;"></div>

    <div class="flex flex-col md:flex-row items-center relative z-10">
        <!-- Text Content -->
        <div class="md:w-1/2 mb-12 md:mb-0" data-aos="fade-right" data-aos-duration="800">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight" data-aos="fade-up"
                data-aos-delay="200">
                Transformasi Digital <br>
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-accent to-white" data-aos="fade-up"
                    data-aos-delay="300">
                    Sekolah Dasar
                </span>
            </h1>

            <p class="text-lg md:text-xl mb-8 opacity-90 max-w-lg" data-aos="fade-up" data-aos-delay="400">
                Solusi lengkap untuk website sekolah dan sistem informasi siswa digital (SIESDE) dengan teknologi
                modern.
            </p>

            <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-4" data-aos="fade-up"
                data-aos-delay="500">
                <a href="#demo"
                    class="px-3 py-3 bg-white text-primary font-medium rounded-lg hover:shadow-lg hover:bg-white/95 transition-all duration-300 transform hover:-translate-y-1 text-center">
                    Coba Demo Gratis <i class="fas fa-arrow-right ml-2"></i>
                </a>

            </div>
        </div>

        <!-- Image Content - Revised with Illustration -->
        <div class="md:w-1/2 flex justify-center items-center" data-aos="fade-left" data-aos-duration="800"
            data-aos-delay="300">
            <div class="relative max-w-md lg:max-w-lg xl:max-w-xl">
                <!-- Illustration Container with Glow Effect -->
                <div class="relative z-10">
                    <!-- Main Illustration with subtle floating animation -->
                    <img src="https://sinaucms.web.id/storage/hero.svg" alt="Sinau CMS Illustration"
                        class="w-full h-auto animate-float-slow transform transition-all duration-700 hover:scale-105"
                        data-aos="zoom-in" data-aos-delay="400">

                    <!-- Glow Effect Behind Illustration -->
                    <div class="absolute inset-0 bg-gradient-to-r from-primary/30 to-accent/30 rounded-full blur-2xl -z-10 opacity-70"
                        style="top: 30%; left: 30%; width: 40%; height: 40%;"></div>
                </div>

                <!-- Floating Badges Around Illustration -->
                <!-- QR Code Badge -->
                <div class="absolute md:block hidden bottom-40 -left-20 bg-white/95 text-dark p-3 rounded-xl shadow-lg z-20 w-36 transform transition-all duration-300 hover:scale-105 hover:rotate-0 rotate-[-5deg] backdrop-blur-sm border border-white/20"
                    data-aos="fade-right" data-aos-delay="600">
                    <div class="flex items-center">
                        <div class="bg-secondary p-1.5 rounded-lg mr-2">
                            <i class="fas fa-qrcode text-white text-sm"></i>
                        </div>
                        <div>
                            <div class="text-xs font-semibold">Verifikasi QR</div>
                            <div class="text-[0.65rem] text-gray-500">Dokumen Digital</div>
                        </div>
                    </div>
                </div>

                <!-- Responsive Badge -->
                <div class="absolute md:block hidden -top-5 -right-5 bg-white/95 text-dark p-3 rounded-xl shadow-lg z-20 w-36 transform transition-all duration-300 hover:scale-105 hover:rotate-0 rotate-[5deg] backdrop-blur-sm border border-white/20"
                    data-aos="fade-left" data-aos-delay="600">
                    <div class="flex items-center">
                        <div class="bg-primary p-1.5 rounded-lg mr-2">
                            <i class="fas fa-mobile-alt text-white text-sm"></i>
                        </div>
                        <div>
                            <div class="text-xs font-semibold">Responsif</div>
                            <div class="text-[0.65rem] text-gray-500">Semua Perangkat</div>
                        </div>
                    </div>
                </div>

                <!-- Cloud Badge (Additional) -->
                <div class="absolute md:block hidden top-1/3 -left-20 bg-white/95 text-dark p-3 rounded-xl shadow-lg z-20 w-36 transform transition-all duration-300 hover:scale-105 hover:rotate-0 rotate-[-8deg] backdrop-blur-sm border border-white/20"
                    data-aos="fade-right" data-aos-delay="700">
                    <div class="flex items-center">
                        <div class="bg-accent p-1.5 rounded-lg mr-2">
                            <i class="fas fa-cloud text-white text-sm"></i>
                        </div>
                        <div>
                            <div class="text-xs font-semibold">Cloud Based</div>
                            <div class="text-[0.65rem] text-gray-500">Akses Dimana Saja</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom Floating Animation -->
<style>
    @keyframes float-slow {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-15px);
        }
    }

    .animate-float-slow {
        animation: float-slow 8s ease-in-out infinite;
    }
</style>
