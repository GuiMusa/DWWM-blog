@extends('layouts.app')

@section('title','create-category')

@section('content')
 
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label for="name">Nom de la catégorie</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        <button type="submit">Créer</button>
    </form>