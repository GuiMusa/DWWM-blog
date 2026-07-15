@extends('layouts.app')

@section('title','Article')

@section('content')

<x-article :article="$article" :category="$article"/>

<div>
    <a href="{{URL('/articles')}}">Retour à la liste</a>
</div>
@endsection
