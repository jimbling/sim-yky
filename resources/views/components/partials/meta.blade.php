<div class="flex items-center text-sm text-gray-500 mb-4">
    <span class="inline-flex items-center mr-4">
        <x-heroicon-o-calendar class="w-4 h-4 mr-1" />
        {{ $published_at ?? 'Tanggal tidak tersedia' }}
    </span>
    <span
        class="inline-flex items-center capitalize bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-xs font-medium">
        {{ $post_type ?? 'tidak diketahui' }}
    </span>
</div>
