<div class="space-y-4">
    @php
        $faqs = [
            [
                'q' => 'Apa itu Sinau CMS?',
                'a' =>
                    'Sinau CMS adalah sistem website sekolah berbasis Laravel yang dirancang khusus untuk Sekolah Dasar namun fleksibel untuk semua jenjang pendidikan.',
            ],
            [
                'q' => 'Apa saja yang didapat saat langganan?',
                'a' =>
                    'Anda akan mendapatkan source code penuh, domain sekolah (.sch.id), hosting, serta instalasi awal dan bantuan teknis.',
            ],
            [
                'q' => 'Berapa biayanya?',
                'a' =>
                    'Biaya awal Rp 1.200.000 (termasuk domain dan hosting selama 1 tahun). Tahun berikutnya cukup Rp 500.000 per bulan untuk domain & hosting.',
            ],
            [
                'q' => 'Apakah sistem bisa dikustom?',
                'a' =>
                    'Ya! Sistem bersifat modular dan dapat dikustom oleh sekolah, baik mandiri maupun melalui tim pengembang Sinau CMS.',
            ],
            [
                'q' => 'Apakah bisa digunakan oleh jenjang lain seperti SMP/SMA?',
                'a' =>
                    'Tentu. Tampilan dan fitur Sinau CMS dapat digunakan untuk SMP, SMA, atau SMK dengan penyesuaian ringan.',
            ],
            [
                'q' => 'Apakah sekolah bisa kelola sendiri?',
                'a' =>
                    'Ya. CMS ini user-friendly dan bisa digunakan oleh guru atau operator tanpa perlu keahlian teknis tinggi.',
            ],
            [
                'q' => 'Bagaimana proses pembelian dan aktivasi?',
                'a' =>
                    'Cukup hubungi kami, kirim data sekolah, dan website Anda akan siap online dalam 1–3 hari kerja.',
            ],
        ];
    @endphp

    @foreach ($faqs as $index => $faq)
        <div x-data="{ open: false }" class="border border-gray-200 rounded-xl p-5 shadow-sm" x-cloak>
            <button @click="open = !open"
                class="w-full flex justify-between items-center text-left text-gray-700 font-medium text-lg focus:outline-none">
                <span>{{ $faq['q'] }}</span>
                <svg x-show="!open" class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                </svg>
                <svg x-show="open" class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor"
                    stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4" />
                </svg>
            </button>
            <div x-show="open" x-collapse class="mt-3 text-gray-600 text-sm leading-relaxed">
                {{ $faq['a'] }}
            </div>
        </div>
    @endforeach
</div>

<div class="text-center mt-10">
    <p class="text-sm text-gray-500">Masih ada pertanyaan? Hubungi kami melalui <a href="https://wa.me/6283130500748"
            class="text-indigo-600 hover:underline">WhatsApp</a>
        atau email <a href="mailto:hello@sinaucms.web.id"
            class="text-indigo-600 hover:underline">hello@sinaucms.web.id</a></p>
</div>
