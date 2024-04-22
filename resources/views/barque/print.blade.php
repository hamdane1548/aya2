<!-- print.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimer fiche</title>
    <!-- Ajoutez ici vos styles CSS spécifiques pour l'impression -->
</head>
<body>
    <!-- Ajoutez ici le contenu de la fiche à imprimer, en utilisant les données de $barque -->
    <h2>Fiche de la barque</h2>
    <p>ID: {{ $barque->ID_BARQUE }}</p>
    <p>ID Port: {{ $barque->ID_PORT }}</p>
    <!-- Ajoutez les autres champs de la fiche -->
</body>
</html>
