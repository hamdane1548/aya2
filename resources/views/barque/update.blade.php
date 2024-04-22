<!-- edit.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une Barque</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <form action="{{ route('barque.update', $barque->ID_BARQUE) }}" method="post">
            @csrf
            @method('PUT')
            <!-- Ajoutez ici les champs de formulaire pour la mise à jour des données de la barque -->
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="{{ route('barque.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
