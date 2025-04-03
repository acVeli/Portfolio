<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification du réseau social</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="socialMedia-container">
        <form action="{{ route('update_social_network', ['id' => $socialNetwork->id]) }}" method="POST" class="socialMedia-form">
            <h1 class="socialMedia-title">Modifier le réseau social</h1>
            @csrf
            <div class="socialMedia-form-group">
                <label for="name" class="socialMedia-label">Nom du réseau social</label>
                <input type="text" id="name" name="name" class="socialMedia-input" value="{{@old('name', $socialNetwork->name) }}" required>
            </div>
            <div class="socialMedia-form-group">
                <label for="url" class="socialMedia-label">URL du réseau social</label>
                <input type="url" id="url" name="url" class="socialMedia-input" value="{{ @old('url', $socialNetwork->url) }}" required>
            </div>
            <button type="submit" class="socialMedia-submit-button">Mettre à jour</button>
        </form>
    </div>
</body>
</html>