<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification du CV</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="cvedit-body">
    <div class="cvedit-container">
        <h1 class="cvedit-title">Modifier le CV</h1>
        <form action="{{ route('cv.update') }}" method="POST" enctype="multipart/form-data" class="cvedit-form">
            @csrf
            <div class="cvedit-form-group">
                <label for="cv" class="cvedit-label">Télécharger le CV (PDF)</label>
                <input type="file" class="cvedit-input" id="cv" name="cv" accept=".pdf" required>
            </div>
            <button type="submit" class="cvedit-button">Mettre à jour le CV</button>
        </form>
        <div class="cvedit-cv-container">
            <iframe src="{{ asset('cv.pdf') }}" class="cvedit-iframe"></iframe>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cvInput = document.getElementById('cv');
            const iframe = document.querySelector('.cvedit-iframe');

            cvInput.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        iframe.src = e.target.result;
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
</body>
</html>
