<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Réseaux sociaux</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="projects-header">
        <h1 class="projects-title">Mes Réseaux sociaux</h1>
        <a href="{{ route('create_social_network') }}" class="projects-create-button">Ajouter un réseau</a>
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
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="socialMedia-container">
        <h1>Gestion des réseaux sociaux</h1>
        <table class="socialMedia-table">
            <thead class="socialMedia-table-header">
                <tr>
                    <th>Nom</th>
                    <th>URL</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="socialMedia-table-body">
                @foreach($socialNetworks as $socialNetwork)
                    <tr class="socialMedia-row">
                        <td class="socialMedia-name">{{ $socialNetwork->name }}</td>
                        <td class="socialMedia-url">{{ $socialNetwork->url }}</td>
                        <td class="socialMedia-actions">
                            <a href="{{ route('edit_social_network', ['id' => $socialNetwork->id]) }}" class="socialMedia-edit-button">Modifier</a>
                            <form action="{{ route('delete_social_network', ['id' => $socialNetwork->id]) }}" method="POST" class="socialMedia-delete-form">
                                @csrf
                                <button type="submit" class="socialMedia-delete-button">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <footer class="projects-footer">
        <p class="projects-footer-text">© 2025 Anton COVU. Tous droits réservés.</p>
    </footer>    
</body>
</html>