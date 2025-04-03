<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un réseau social</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="socialMedia-container">
        <form action="{{ route('store_social_network') }}" method="POST" class="socialMedia-form">
            <h1 class="socialMedia-title">Ajouter un réseau social</h1>
            <!-- CSRF token for security -->
            @csrf
            <div class="socialMedia-form-group">
                <label for="name" class="socialMedia-label">Nom du réseau social</label>
                <input type="text" id="name" name="name" class="socialMedia-input" required>
            </div>
            <div class="socialMedia-form-group">
                <label for="url" class="socialMedia-label">URL du réseau social</label>
                <input type="url" id="url" name="url" class="socialMedia-input" required>
            </div>
            <button type="submit" class="socialMedia-submit-button">Ajouter</button>
        </form>
    </div>
</body>
</html>
