@extends('layouts.app')

@section('title', 'Nouvel article')

@section('content')
<div class="max-w-2xl mx-auto py-10 px-4">

    <h1 class="text-2xl font-semibold text-gray-900 mb-6">Nouvel article</h1>

    @if ($errors->any())
        <div class="mb-4 bg-red-50 border border-red-200 text-red-700 text-sm rounded-md p-4">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.articles.store') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Titre</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}"
                   class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-black">
        </div>

        <div>
            <label for="category_id" class="block text-sm font-medium text-gray-700 mb-1">Catégorie</label>
            <select name="category_id" id="category_id"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-black">
                <option value="">-- Choisir une catégorie --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Contenu</label>
            <textarea name="content" id="content" rows="8"
                      class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-black">{{ old('content') }}</textarea>
        </div>

        <div>
            <div>
    <label class="block text-sm font-medium text-gray-700 mb-2">Statut</label>
    <div class="flex items-center gap-6">
        <label class="flex items-center gap-2 text-sm text-gray-700 cursor-pointer">
            <input type="radio" name="status" value="published"
                   class="text-black focus:ring-black"
                   @checked(old('status') === 'published')>
            Publié
        </label>
        <label class="flex items-center gap-2 text-sm text-gray-700 cursor-pointer">
            <input type="radio" name="status" value="draft"
                   class="text-black focus:ring-black"
                   @checked(old('status', 'draft') === 'draft')>
            Brouillon
        </label>
    </div>
</div>
        </div>

        <div class="flex items-center gap-3 pt-2">
            <button type="submit"
                    class="bg-black text-white text-sm font-medium px-4 py-2 rounded-md hover:bg-gray-800 transition">
                Créer l'article
            </button>
            <a href="{{ route('admin.articles.index') }}" class="text-sm text-gray-500 hover:text-gray-700">
                Annuler
            </a>
        </div>
    </form>

</div>
@endsection
