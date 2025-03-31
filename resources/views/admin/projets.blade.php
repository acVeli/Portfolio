<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Projets</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="projects-body">
    <header class="projects-header">
        <h1 class="projects-title">Mes Projets</h1>
        <a href="#" class="projects-create-button">Créer un projet</a>
    </header>
    <main class="projects-main">
        <table class="projects-table">
            <thead class="projects-table-header">
                <tr>
                    <th class="projects-table-cell">Nom</th>
                    <th class="projects-table-cell">Description</th>
                    <th class="projects-table-cell">Actions</th>
                </tr>
            </thead>
            <tbody class="projects-table-body">
                <!-- Exemple d'un projet -->
                @foreach($projects as $project)
                <tr class="projects-table-row">
                    <td class="projects-table-cell">{{ $project->name }}</td>
                    <td class="projects-table-cell">{{ $project->description }}</td>
                    <td class="projects-table-cell">
                        <a href="#" class="projects-edit-button">Modifier</a>
                        <form action="#" method="POST" class="projects-delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="projects-delete-button">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
    <footer class="projects-footer">
        <p class="projects-footer-text">© 2025 Mon Dashboard. Tous droits réservés.</p>
    </footer>
</body>
</html>
