<div class="space-y-10">
    @foreach ($posts as $item)
        <div class="border-b border-gray-100 pb-6">
            <h2 class="text-2xl font-semibold text-gray-900 mb-2">
                <a href="{{ route('post.show', $item->slug) }}" class="hover:text-indigo-600">
                    {{ $item->title }}
                </a>
            </h2>

            <div class="text-sm text-gray-500 flex items-center space-x-4 mb-3">
                <span class="inline-flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    {{ $item->published_at->format('d F Y') }}
                </span>
                <span class="capitalize bg-indigo-100 text-indigo-800 px-2 py-1 rounded-full text-xs">
                    {{ $item->post_type }}
                </span>
            </div>

            <p class="text-gray-700 text-base">
                {{ Str::limit(strip_tags($item->content), 200) }}
            </p>

            <div class="mt-4">
                <a href="{{ route('post.show', $item->slug) }}"
                    class="text-indigo-600 hover:underline text-sm font-medium">Baca selengkapnya →</a>
            </div>
        </div>
    @endforeach
</div>
