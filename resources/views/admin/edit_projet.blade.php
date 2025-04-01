<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="edit-projet-form">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{route('update_projet', ['id' => $project->id])}}" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="edit-projet-input" value="{{ old('image', $project->image) }}">
            </div>

            <div class="form-group">
                <label for="image_author">Auteur de l'image</label>
                <input type="text" name="image_author" id="image_author" class="edit-projet-input" value="{{ old('image_author', $project->image_author) }}">
            </div>

            <div class="form-group">
                <label for="image_author_link">Lien de l'auteur</label>
                <input type="url" name="image_author_link" id="image_author_link" class="edit-projet-input" value="{{ old('image_author_link', $project->image_author_link) }}">
            </div>
    
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name="title" id="title" class="edit-projet-input" value="{{ old('title', $project->title) }}">
            </div>
    
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="edit-projet-input">{{ old('description', $project->description) }}</textarea>
            </div>
    
            <div class="form-group">
                <label for="tags">Tags</label>
                <input type="text" name="tags" id="tags" class="edit-projet-input" value="{{ old('tags', $project->tags) }}">
            </div>
    
            <div class="form-group">
                <label for="project_link">Lien du projet</label>
                <input type="url" name="project_link" id="project_link" class="edit-projet-input" value="{{ old('project_link', $project->project_link) }}">
            </div>
    
            <div class="form-group">
                <label for="github_link">Lien GitHub</label>
                <input type="url" name="github_link" id="github_link" class="edit-projet-input" value="{{ old('github_link', $project->github_link) }}">
            </div>
    
            <button type="submit" class="edit-projet-button">Mettre à jour</button>
        </form>
    </div>    
</body>
</html>