<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compétences</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="skillsCategory-body">
    <header class="dashboard-header">
        <h1 class="dashboard-title">Mes Compétences</h1>
        <a href="{{ route('create_skills_categorie') }}" class="projects-create-button">Créer une compétence</a>
    </header>
    <nav class="dashboard-nav">
        <ul class="dashboard-menu">
            <li class="dashboard-menu-item"><a href="{{ route('dashboard') }}" class="dashboard-link">Accueil</a></li>
            <li class="dashboard-menu-item"><a href="{{ route('projets') }}" class="dashboard-link">Projets</a></li>
            <li class="dashboard-menu-item"><a href="{{ route('skills') }}" class="dashboard-link">Skills</a></li>
            <li class="dashboard-menu-item"><a href="{{ route('skills') }}" class="dashboard-link">CV</a></li>
            <li class="dashboard-menu-item"><a href="{{ route('skills') }}" class="dashboard-link">Réseaux Sociaux</a></li>
        </ul>
    </nav>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="skillsCategory-container">
        <h1 class="skillsCategory-title">Catégories de compétences</h1>
        <table class="skillsCategory-table">
            @foreach ($skillsCategories as $category)
                <tr class="skillsCategory-row">
                    <td class="skillsCategory-name">{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('edit_skills_categorie', ['id' => $category->id]) }}" class="skillsCategory-link">Modifier</a>
                    </td>
                    <td>
                        <form action="{{ route('delete_skills_categorie', ['id' => $category->id]) }}" method="POST" class="skillsCategory-form">
                            @csrf
                            <button type="submit" class="skillsCategory-button">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
