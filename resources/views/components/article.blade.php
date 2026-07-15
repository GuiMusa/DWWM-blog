<div>
    <h2>{{ $article->title }}</h2>
    <p>{{$article->content}}</p>
    <p>Par {{$article->user->name}}</p>
    <p>Catégories : {{$category->category->name}}</p>
</div>