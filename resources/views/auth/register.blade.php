<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register.store') }}">
        @csrf

        <label for="firstname">Prénom</label>
        <input type="text" name="firstname" id="firstname" value="{{ old('firstname') }}">
        <br>

        <label for="lastname">Nom</label>
        <input type="text" name="lastname" id="lastname" value="{{ old('lastname') }}">
        <br>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">
        <br>

        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">
        <br>

        <label for="password_confirmation">Confirmer le mot de passe</label>
        <input type="password" name="password_confirmation" id="password_confirmation">
        <br>

        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>
