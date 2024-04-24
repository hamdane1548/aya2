<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'ajout d'un port</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <form action="{{ route('port.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="ID_PORT">ID Port:</label>
                <input type="text" id="ID_PORT" name="ID_PORT" class="form-control" value="" required>
            </div>

<!-- Section des ports -->
<div class="form-group">
    <label for="ID_REGION">Region:</label>
    <select id="ID_REGION" name="ID_REGION" class="form-control" required>
        <option value="">Choisissez une region</option> <!-- Option vide -->
        @foreach($regions as $region)
            <option value="{{ $region->ID_REGION }}">{{ $region->NOM_REGION }}</option>
        @endforeach
    </select>
</div>




            <div class="form-group">
                <label for="NOM_PORT">	NOM_PORT:</label>
                <input type="text" id="NOM_PORT" name="NOM_PORT" class="form-control" value="" required>
            </div>

            <div class="form-group">
                <label for="LATITUDE">LATITUDE :</label>
                <input type="text" id="LATITUDE" name="LATITUDE" class="form-control" value="" required>
            </div>

            <div class="form-group">
                <label for="LONGITUDE">LONGITUDE:</label>
                <input type="text" id="LONGITUDE" name="LONGITUDE" class="form-control" value="" required>
            </div>

         
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <button type="reset" class="btn btn-secondary">Annuler</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
