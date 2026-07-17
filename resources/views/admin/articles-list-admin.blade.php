@extends('layouts.app')

@section('title', 'Articles')

@section('content')
<div class="max-w-6xl mx-auto py-10 px-4">

    {{-- En-tête --}}
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-semibold text-gray-900">Articles</h1>
        <button class="bg-black text-white text-sm font-medium px-4 py-2 rounded-md hover:bg-gray-800 transition">
            + Nouvel article
        </button>
    </div>

    {{-- Tableau --}}
    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
        <table class="w-full text-left text-sm">
            <thead class="border-b border-gray-200 text-gray-500">
                <tr>
                    <th class="px-6 py-3 font-medium">Titre</th>
                    <th class="px-6 py-3 font-medium">Catégorie</th>
                    <th class="px-6 py-3 font-medium">Statut</th>
                    <th class="px-6 py-3 font-medium">Date</th>
                    <th class="px-6 py-3 font-medium">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse ($articles as $article)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-gray-900">{{ $article->title }}</td>
                        <td class="px-6 py-4 text-gray-600">{{ $article->category->name ?? '—' }}</td>
                        <td class="px-6 py-4">
                            @if ($article->status === 'published')
                                <span class="inline-flex items-center gap-2 text-gray-700">
                                    <span class="w-2 h-2 rounded-full bg-green-500"></span>
                                    Publié
                                </span>
                            @else
                                <span class="inline-flex items-center gap-2 text-gray-500">
                                    <span class="w-2 h-2 rounded-full bg-gray-300"></span>
                                    Brouillon
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-gray-600">
                            {{ $article->created_at->format('d/m/Y') }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3 text-gray-500">
                                {{-- Modifier --}}
                                <button class="hover:text-gray-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                                {{-- Supprimer --}}
                                <button class="hover:text-red-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                                {{-- Publier / voir --}}
                                <button class="hover:text-gray-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-10 text-center text-gray-400">
                            Aucun article pour le moment.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    @if ($articles->hasPages())
        <div class="flex items-center justify-center gap-4 mt-6">
            @if ($articles->onFirstPage())
                <span class="px-4 py-2 text-sm rounded-md bg-gray-100 text-gray-400 cursor-not-allowed">← Précédent</span>
            @else
                <a href="{{ $articles->previousPageUrl() }}" class="px-4 py-2 text-sm rounded-md bg-black text-white hover:bg-gray-800">← Précédent</a>
            @endif

            <span class="text-sm text-gray-500">
                Page {{ $articles->currentPage() }}/{{ $articles->lastPage() }}
            </span>

            @if ($articles->hasMorePages())
                <a href="{{ $articles->nextPageUrl() }}" class="px-4 py-2 text-sm rounded-md bg-black text-white hover:bg-gray-800">Suivant →</a>
            @else
                <span class="px-4 py-2 text-sm rounded-md bg-gray-100 text-gray-400 cursor-not-allowed">Suivant →</span>
            @endif
        </div>
    @endif

</div>
@endsection