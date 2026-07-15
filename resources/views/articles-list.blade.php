@extends('layouts.app')

@section('title','Article')

@section('content')
 
    <h1>Articles list</h1>
        @foreach ($articles as $article)
            <div style="border: 1px solid #ddd; border-radius: 8px; padding: 16px; margin-bottom: 16px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                <x-article :article="$article" :category="$article"/>
                <a href="{{route('article.details', $article->id)}}">voir plus</a>
            </div>
        @endforeach
        <div>
         {{ $articles->links() }}
        </div>

@endsection