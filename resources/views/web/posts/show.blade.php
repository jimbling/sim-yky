@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div class="container mx-auto px-4 py-12 max-w-7xl">
        <x-partials.breadcrumb>{{ Str::limit($post->title, 30) }}</x-partials.breadcrumb>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <div class="lg:col-span-8">
                <article class="bg-white rounded-2xl overflow-hidden shadow-xl">
                    @if ($post->cover)
                        <div class="aspect-w-16 aspect-h-9 w-full">
                            <img src="{{ asset('storage/' . $post->cover) }}" alt="{{ $post->title }}"
                                class="w-full h-full object-cover rounded-t-2xl">
                        </div>
                    @endif

                    <div class="p-8">
                        @if (!isset($post->is_static) || $post->is_static === false)
                            <x-partials.meta :published_at="$post->published_at?->format('d F Y')" :post_type="$post->post_type" />
                        @endif

                        <h1 class="text-4xl font-bold text-gray-900 mb-6 leading-tight">{{ $post->title }}</h1>

                        <div
                            class="prose max-w-none prose-lg prose-indigo prose-headings:font-semibold prose-a:text-indigo-600 hover:prose-a:text-indigo-800 prose-img:rounded-xl prose-img:shadow-md">
                            {!! $post->content !!}
                        </div>


                    </div>
                </article>
            </div>

            <div class="lg:col-span-4">
                <div class="sticky top-6 space-y-8">
                    <x-partials.related :related="$relatedPosts" />
                    <x-partials.newsletter />
                </div>
            </div>
        </div>
    </div>
@endsection
