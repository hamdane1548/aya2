<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la barque</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Détails de la barque</h2>
        <ul>
            <li>ID Barque: {{ $barque->ID_BARQUE }}</li>
            <li>Port: {{ $barque->ID_PORT }}</li>
            <li>Rais: {{ $barque->ID_RAIS }}</li>
            <li>Matricule: {{ $barque->MARTICULE }}</li>
            <li>Nombre d'équipe: {{ $barque->EQUIPE_NOMBRE }}</li>
            <li>Code Barque: {{ $barque->CODEBARRQUE }}</li>
            <li>Mesure: {{ $barque->MESURE }}</li>
            <!-- Ajoutez ici d'autres détails de la barque que vous souhaitez afficher -->
        </ul>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
