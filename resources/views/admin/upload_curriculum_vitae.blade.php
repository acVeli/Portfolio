<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification du CV</title>
</head>
<body>
    <div>
        <h1>Modifier le CV</h1>
        <form action="{{ route('cv.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="cv" class="form-label">Télécharger le CV (PDF)</label>
                <input type="file" class="form-control" id="cv" name="cv" accept=".pdf" required>
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour le CV</button>
        </form>
        <div class="cv-container">
            <iframe src="{{ asset('cv.pdf') }}" style="width: 100%; height: 600px;"></iframe>
        </div>
    </div>
</body>
</html>