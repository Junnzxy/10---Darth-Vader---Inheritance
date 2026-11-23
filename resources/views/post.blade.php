@extends('layouts.app')

@section('title', $title ?? ($post->title . ' - Imperial Post'))

@section('content')

    <div class="max-w-3xl mx-auto py-6">
        <!-- Back Link -->
        <a href="{{ route('blog') }}" class="inline-flex items-center gap-2 text-xs font-mono text-zinc-400 hover:text-red-400 transition mb-6">
            &larr; Kembali ke Arsip Blog Karakter
        </a>

        <!-- Post Article Card -->
        <article class="bg-zinc-900/80 border border-zinc-800 rounded-3xl p-6 sm:p-10 shadow-2xl">
            <!-- Header Meta -->
            <div class="flex flex-wrap items-center gap-3 text-xs text-zinc-400 pb-4 border-b border-zinc-800">
                <span class="px-2.5 py-1 rounded bg-red-600/10 border border-red-500/30 text-red-400 font-mono font-semibold">
                    Imperial Log
                </span>
                <span>&bull;</span>
                <!-- One to Many Relationship Display -->
                <span class="text-zinc-200">
                    Author: <strong class="text-red-400 font-semibold">{{ $post->author->name }}</strong>
                </span>
                <span>&bull;</span>
                <span class="text-zinc-500 font-mono">
                    {{ $post->created_at ? $post->created_at->diffForHumans() : 'Recently' }}
                </span>
            </div>

            <!-- Title -->
            <h1 class="font-display text-2xl sm:text-4xl font-black text-white mt-6 mb-6 leading-tight">
                {{ $post->title }}
            </h1>

            <!-- Body -->
            <div class="prose prose-invert max-w-none text-zinc-300 text-sm sm:text-base leading-relaxed space-y-4">
                <p>{{ $post->body }}</p>
            </div>

            <!-- Author Box (Demonstrating $post->author) -->
            <div class="mt-10 pt-6 border-t border-zinc-800 flex items-center gap-4 bg-zinc-800/30 p-4 rounded-2xl">
                <div class="w-12 h-12 rounded-full bg-red-600/20 border border-red-500/40 flex items-center justify-center text-red-400 font-bold font-display text-lg">
                    {{ substr($post->author->name, 0, 1) }}
                </div>
                <div>
                    <span class="text-xs font-mono uppercase text-zinc-400 block">Ditulis oleh (Author)</span>
                    <span class="text-white font-bold text-sm">{{ $post->author->name }}</span>
                    <span class="text-xs text-zinc-500 block font-mono">{{ $post->author->email }}</span>
                </div>
            </div>
        </article>
    </div>

@endsection
