<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Création de technologie</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="createSkill-body">
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="createSkill-container">
        <h1 class="createSkill-title">Créer une technologie</h1>
        <a href="{{ route('dashboard') }}" class="createSkill-link">Retour au Dashboard</a>
    </div>
    <div class="createSkill-formContainer">
        <form action="{{ route('store_technology') }}" method="POST" class="createSkill-form">
            @csrf
            <div class="createSkill-formGroup">
                <label for="skillsCategory" class="createSkill-label">Catégorie de compétence</label>
                <select id="skillsCategory" name="skills_category_id" class="createSkill-select" required>
                    @foreach ($skillsCategories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="createSkill-formGroup">
                <label for="name" class="createSkill-label">Nom de la technologie</label>
                <input type="text" id="name" name="name" class="createSkill-input" required>
            </div>
            <div class="createSkill-formGroup">
                <label for="progress-bar" class="createSkill-label">Pourcentage de maitrise</label>
                <input type="range" id="progress-bar" name="pourcentage" min="0" max="100" value="50" class="createSkill-range">
                <span id="progress-bar-value">50%</span>
            </div>
            <button type="submit" class="createSkill-button">Créer</button>
        </form>
    </div>
    <script>
        const progressBar = document.getElementById('progress-bar');
        const progressBarValue = document.getElementById('progress-bar-value');

        progressBar.addEventListener('input', function() {
            progressBarValue.textContent = this.value + '%';
        });
    </script>
</body>
</html>
