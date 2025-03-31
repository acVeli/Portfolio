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
        <a href="{{ route('create_projet') }}" class="projects-create-button">Créer un projet</a>
    </header>
    <main class="projects-main">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="projects-table">
            <thead class="projects-table-header">
                <tr>
                    <th class="projects-table-cell">Nom</th>
                    <th class="projects-table-cell cell-image">Image</th>
                    <th class="projects-table-cell">Description</th>
                    <th class="projects-table-cell">Actions</th>
                </tr>
            </thead>
            <tbody class="projects-table-body">
                <!-- Exemple d'un projet -->
                @foreach($projects as $project)
                <tr class="projects-table-row">
                    <td class="projects-table-cell">{{ $project->title }}</td>
                    <td class="projects-table-cell cell-image">
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="projects-image">
                    </td>
                    <td class="projects-table-cell cell-description">{{ $project->description }}</td>
                    <td class="projects-table-cell cell-actions">
                        <a href="{{route('edit_projet', ['id' => $project->id])}}" class="projects-edit-button">Modifier</a>
                        <form action="{{ route('delete_projet', ['id' => $project->id]) }}" method="POST" class="projects-delete-form">
                            @csrf
                            <button type="submit" class="projects-delete-button">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
    <footer class="projects-footer">
        <p class="projects-footer-text">© 2025 Anton COVU. Tous droits réservés.</p>
    </footer>
</body>
</html>
