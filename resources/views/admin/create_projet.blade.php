<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Project</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="create-projet">
    <header class="create-projet-header">
        <h1 class="create-projet-title">Créer un Projet</h1>
        <a href="{{ route('dashboard') }}" class="create-projet-back-button">Retour au Dashboard</a>
    </header>
    <div class="create-projet-container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('store_projet') }}" method="POST" enctype="multipart/form-data" class="create-projet-form">
            @csrf
            <div class="form-group">
                <label for="image" class="form-label">Image du Projet</label>
                <input type="file" id="image" name="image" class="form-input">
            </div>

            <div class="form-group">
                <label for="title" class="form-label">Titre</label>
                <input type="text" id="title" name="title" class="form-input">
            </div>

            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-textarea"></textarea>
            </div>

            <div class="form-group">
                <label for="tags" class="form-label">Tags</label>
                <input type="text" id="tags" name="tags" class="form-input">
            </div>

            <div class="form-group">
                <label for="project_link" class="form-label">Lien du Projet</label>
                <input type="url" id="project_link" name="project_link" class="form-input">
            </div>

            <div class="form-group">
                <label for="github_link" class="form-label">Lien GitHub</label>
                <input type="url" id="github_link" name="github_link" class="form-input">
            </div>

            <button type="submit" class="form-button">Soumettre</button>
        </form>
    </div>
</body>
</html>
