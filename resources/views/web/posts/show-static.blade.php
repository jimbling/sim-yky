@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div class="container mx-auto px-4 py-12 max-w-7xl">
        <x-partials.breadcrumb>{{ Str::limit($post->title, 30) }}</x-partials.breadcrumb>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <div class="lg:col-span-8">
                <article class="bg-white rounded-2xl overflow-hidden shadow-xl">
                    <div class="p-8">
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
                    <x-partials.newsletter />
                </div>
            </div>
        </div>
    </div>
@endsection
