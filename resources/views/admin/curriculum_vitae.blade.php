<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curriculum Vitae</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="dashboard-header">
        <h1 class="dashboard-title">Mon CV</h1>
    </header>
    <nav class="dashboard-nav">
        <ul class="dashboard-menu">
            <li class="dashboard-menu-item"><a href="{{ route('dashboard') }}" class="dashboard-link">Accueil</a></li>
            <li class="dashboard-menu-item"><a href="{{ route('projets') }}" class="dashboard-link">Projets</a></li>
            <li class="dashboard-menu-item"><a href="{{ route('skills') }}" class="dashboard-link">Skills</a></li>
            <li class="dashboard-menu-item"><a href="{{ route('cv') }}" class="dashboard-link">CV</a></li>
            <li class="dashboard-menu-item"><a href="{{ route('skills') }}" class="dashboard-link">Réseaux Sociaux</a></li>
        </ul>
    </nav>
    <div>
        @if(!$cv->isEmpty())
        <div class="cv-container">
            <iframe src="{{ $cv[0]->url }}"></iframe>
        </div>
        @else
        <div class="cv-container">
            <iframe src="{{ asset('cv.pdf') }}"></iframe>
        </div>
        @endif
        @if($cv->isEmpty())
            <div class="alert alert-warning">
                Aucun CV trouvé. Veuillez télécharger un CV.
            </div>
            <div class="cv-upload-btn">
                <a href="{{ route('cv.create') }}">Ajouter mon CV</a>
            </div>
            @else
            <div class="cv-upload-btn">
                <a href="{{ route('cv.edit') }}">Changer le CV</a>
            </div>    
        @endif
    </div>
</body>
</html>