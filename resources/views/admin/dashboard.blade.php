<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="dashboard-body">
    <header class="dashboard-header">
        <h1 class="dashboard-title">Mon Dashboard</h1>
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
    <main class="dashboard-main">
        <section class="dashboard-section">
            <h2 class="dashboard-section-title">Statistiques</h2>
            <p class="dashboard-section-content">Ici, vous trouverez vos statistiques...</p>
        </section>
        <section class="dashboard-section">
            <h2 class="dashboard-section-title">Dernières Activités</h2>
            <p class="dashboard-section-content">Vos récentes activités s'afficheront ici.</p>
        </section>
    </main>
    <footer class="dashboard-footer">
        <p class="dashboard-footer-text">© 2025 Anton COVU. Tous droits réservés.</p>
    </footer>
</body>
</html>
