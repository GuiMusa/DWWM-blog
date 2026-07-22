@extends('layouts.app')

@section('title', 'Catégories')

@section('content')
<div class="max-w-6xl mx-auto py-10 px-4">

    {{-- En-tête --}}
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Catégories</h1>
        <a href="{{ route('categories.create') }}"
           class="bg-black text-white text-sm font-medium px-6 py-2 rounded-md hover:bg-gray-800 transition">
            + Nouvelle catégorie
        </a>
    </div>

    {{-- Tableau --}}
    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
        <table class="w-full text-left text-sm">
            <thead class="border-b border-gray-200 bg-gray-50">
                <tr>
                    <th class="px-6 py-3 font-medium">Nom</th>
                    <th class="px-6 py-3 font-medium">Nombre d'articles</th>
                    <th class="px-6 py-3 font-medium">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse ($categories as $category)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-gray-800">{{ $category->name ?? '—' }}</td>
                    <td class="px-6 py-4 text-gray-600">{{ $category->articles_count }}</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3 text-gray-500">
                            {{-- Modifier --}}
                            <a href="{{ route('categories.edit', $category->id) }}" class="hover:text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </a>

                            {{-- Supprimer --}}
                         <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                            onsubmit="return confirm('Supprimer cette catégorie ?')">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="hover:text-red-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                        </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-10 text-center text-gray-600">
                        Aucune catégorie pour le moment.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection