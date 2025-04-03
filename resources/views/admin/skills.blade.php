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
        @if(!$skillsCategories->isEmpty())
            <a href="{{ route('create_technology') }}" class="projects-create-button">Créer une technologie</a>
        @endif
        <a href="{{ route('create_skills_categorie') }}" class="projects-create-button">Créer une compétence</a>
    </header>
    <nav class="dashboard-nav">
        <ul class="dashboard-menu">
            <li class="dashboard-menu-item"><a href="{{ route('dashboard') }}" class="dashboard-link">Accueil</a></li>
            <li class="dashboard-menu-item"><a href="{{ route('projets') }}" class="dashboard-link">Projets</a></li>
            <li class="dashboard-menu-item"><a href="{{ route('skills') }}" class="dashboard-link">Skills</a></li>
            <li class="dashboard-menu-item"><a href="{{ route('cv') }}" class="dashboard-link">CV</a></li>
            <li class="dashboard-menu-item"><a href="{{ route('social_networks') }}" class="dashboard-link">Réseaux Sociaux</a></li>
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
                    <td>
                        <button class="skillsCategory-expand-button" onclick="toggleTechnologies('{{ $category->id }}')">Afficher Technologies</button>
                    </td>
                </tr>
                <tr id="technologies-{{ $category->id }}" class="technologies-row hidden">
                    <td colspan="4">
                        <table class="technology-table">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Pourcentage</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category->technologies as $technology)
                                    <tr class="technology-row">
                                        <td class="technology-name">{{ $technology->name }}</td>
                                        <td class="technology-description">
                                            <div class="technologyProgressBarContainer">
                                                <div class="technologyProgressBar"></div>    
                                            </div>
                                            <p>{{ $technology->pourcentage }}%</p>
                                        </td>
                                        <td class="technology-actions">
                                            <a href="{{ route('edit_technology', ['id' => $technology->id]) }}" class="technology-link">Modifier</a>
                                            <form action="{{ route('delete_technology', ['id' => $technology->id]) }}" method="POST" class="technology-form">
                                                @csrf
                                                <button type="submit" class="technology-button">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <script>
        function toggleTechnologies(categoryId) {
            const row = document.getElementById(`technologies-${categoryId}`);
            row.classList.toggle('hidden');
        }

        document.querySelectorAll('.technologyProgressBarContainer').forEach(container => {
            const progressBar = container.querySelector('.technologyProgressBar');
            const percentage = parseInt(container.nextElementSibling.textContent);
            progressBar.style.width = `${percentage}%`;
        });
    </script>
</body>
</html>
