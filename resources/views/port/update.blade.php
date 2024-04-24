<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Port</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <form action="{{ route('port.update', $port->ID_PORT) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="ID_PORT">ID Port:</label>
                <input type="text" id="ID_PORT" name="ID_PORT" class="form-control" value="{{ $port->ID_PORT }}" required>
            </div>

            <div class="form-group">
                <label for="ID_REGION">Région:</label>
                <input type="text" id="ID_REGION" name="ID_REGION" class="form-control" value="{{ $port->ID_REGION }}" required>
            </div>

            <div class="form-group">
                <label for="NOM_PORT">Nom du Port:</label>
                <input type="text" id="NOM_PORT" name="NOM_PORT" class="form-control" value="{{ $port->NOM_PORT }}" required>
            </div>

            <div class="form-group">
                <label for="LATITUDE">Latitude:</label>
                <input type="text" id="LATITUDE" name="LATITUDE" class="form-control" value="{{ $port->LATITUDE }}" required>
            </div>

            <div class="form-group">
                <label for="LONGITUDE">Longitude:</label>
                <input type="text" id="LONGITUDE" name="LONGITUDE" class="form-control" value="{{ $port->LONGITUDE }}" required>
            </div>

            <!-- Ajoutez ici d'autres champs de formulaire pour la mise à jour des données du port -->
            
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="{{ route('port.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
