<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Création de Compétence</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="createSkill-body">
    <div class="createSkill-container">
        <h1 class="createSkill-title">Créer une Compétence</h1>
        <a href="{{ route('dashboard') }}" class="createSkill-link">Retour au Dashboard</a>
    </div>
    <div class="createSkill-formContainer">
        <form action="{{ route('store_skills_categorie') }}" method="POST" class="createSkill-form">
            @csrf
            <div class="createSkill-formGroup">
                <label for="name" class="createSkill-label">Nom de la Compétence</label>
                <input type="text" id="name" name="name" class="createSkill-input" required>
            </div>

            <button type="submit" class="createSkill-button">Créer</button>
        </form>
    </div>
</body>
</html>
