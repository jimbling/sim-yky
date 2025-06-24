<div class="container mx-auto px-6 py-16">
    <!-- Section Header -->
    <div class="text-center mb-16" data-aos="fade-up">
        <span
            class="inline-block bg-primary/10 text-primary px-4 py-1 rounded-full text-sm font-medium mb-4">Resources</span>
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Artikel & Panduan Terbaru</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Update informasi dan panduan penggunaan Sinau CMS untuk sekolah Anda
        </p>
    </div>

    <!-- Articles Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up">
        @forelse($posts as $post)
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 group">
                <div class="relative overflow-hidden h-48">
                    <img src="{{ Storage::url($post->cover ?? 'posts/covers/default.jpg') }}" alt="{{ $post->title }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <span
                        class="absolute top-4 left-4 bg-primary text-white px-3 py-1 rounded-full text-xs font-medium">
                        {{ ucfirst($post->post_type ?? 'Artikel') }}
                    </span>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <span>{{ $post->created_at->format('d M Y') }}</span>
                        <span class="mx-2">•</span>
                        <span>{{ str_word_count(strip_tags($post->content)) / 200 >= 1 ? ceil(str_word_count(strip_tags($post->content)) / 200) : 1 }}
                            min read</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-primary transition">
                        {{ $post->title }}
                    </h3>
                    <p class="text-gray-600 mb-4">
                        {{ $post->excerpt }}
                    </p>
                    <a href="{{ route('post.show', $post->slug) }}"
                        class="inline-flex items-center text-primary font-medium group-hover:underline">
                        Baca Selengkapnya
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        @empty
            <p class="col-span-3 text-center text-gray-500">Belum ada artikel tersedia.</p>
        @endforelse
    </div>


    <!-- CTA Button -->
    <div class="text-center mt-12" data-aos="fade-up">
        <a href="/pages/artikel"
            class="inline-flex items-center px-6 py-3 bg-primary text-white font-medium rounded-lg hover:bg-primary/90 transition shadow-md hover:shadow-lg">
            Lihat Semua Artikel
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
        </a>
    </div>
</div>
