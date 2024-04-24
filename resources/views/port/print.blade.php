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
    <!-- Ajoutez ici le contenu de la fiche à imprimer, en utilisant les données de $port -->
    <h2>Fiche de port</h2>
    <p>ID Port: {{ $port->ID_PORT }}</p>
    <p>Nom du Port: {{ $port->NOM_PORT }}</p>
    <p>Région: {{ $port->region->nom }}</p>
    <p>Latitude: {{ $port->LATITUDE }}</p>
    <p>Longitude: {{ $port->LONGITUDE }}</p>
    <!-- Ajoutez les autres champs de la fiche -->
</body>
</html>
