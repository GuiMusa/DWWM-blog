@extends('layouts.app')

@section('title','Article')

@section('content')
 
    <h1>Articles list</h1>
        @foreach ($articles as $article)
            <x-article :article="$article" :category="$article"/>
        @endforeach

@endsection

</body>
</html>