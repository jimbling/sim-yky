<div class="bg-white rounded-2xl shadow-xl overflow-hidden">
    <div class="bg-gradient-to-r from-indigo-600 to-indigo-800 px-6 py-4">
        <h2 class="text-xl font-semibold text-white">Artikel Terkait</h2>
    </div>
    <div class="p-6">
        <ul class="space-y-5">
            @foreach ($related as $item)
                <li class="pb-5 border-b border-gray-100 last:border-0 last:pb-0">
                    <a href="{{ route('post.show', $item->slug) }}" class="group block">
                        <h3 class="font-medium text-gray-900 group-hover:text-indigo-600 transition-colors duration-200">
                            {{ Str::limit($item->title, 60) }}</h3>
                        <div class="flex items-center mt-1 text-xs text-gray-500">
                            <x-heroicon-o-calendar class="w-3 h-3 mr-1" />
                            {{ $item->published_at?->format('d M Y') }}
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
