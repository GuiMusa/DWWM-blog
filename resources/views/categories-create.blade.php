@extends('layouts.app')

@section('title','create-category')

@section('content')

<div class="max-w-md mx-auto py-10 px-4">

    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Nouvelle catégorie</h1>

    @if ($errors->any())
        <div class="mb-4 bg-red-50 border border-red-200 text-red-700 text-sm rounded-md px-4 py-3">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.store') }}" method="POST" class="bg-white border border-gray-200 rounded-lg p-6">
        @csrf

        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nom de la catégorie</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}"
               class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm mb-4 focus:outline-none focus:ring-2 focus:ring-black">

        <button type="submit"
                class="bg-black text-white text-sm font-medium px-6 py-2 rounded-md hover:bg-gray-800 transition">
            Créer
        </button>
    </form>

</div>
@endsection