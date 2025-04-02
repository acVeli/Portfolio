<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Création du CV</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="curriculum-body">
    <div class="curriculum-container">
        <h1 class="curriculum-title">Créer le CV</h1>
        <form action="{{ route('cv.store') }}" method="POST" enctype="multipart/form-data" class="curriculum-form">
            @csrf
            <div class="curriculum-form-group">
                <label for="cv" class="curriculum-label">Télécharger le CV (PDF)</label>
                <input type="file" class="curriculum-input" id="cv" name="cv" accept=".pdf" required>
            </div>
            <button type="submit" class="curriculum-button">Envoyer le CV</button>
        </form>
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="curriculum-viewer">
            <iframe src="{{ asset('cv.pdf') }}" class="curriculum-iframe"></iframe>
        </div>
    </div>
    <script>
        //visualiser le cv dans l'iframe
        document.getElementById('cv').addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.querySelector('.curriculum-iframe').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>
