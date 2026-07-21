<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- liste des category --}}
    <h1>Catégorie list</h1>
    @foreach ($categories as $category)
    <div class="px-6 py-4 text-gray-600">
        {{ $category->name ?? '—' }}
        {{ $category->articles_count }}
    </div>
    @endforeach

    
</body>
</html>