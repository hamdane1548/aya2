<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'ajout d'un barque</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <form action="{{ route('barque.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="ID_BARQUE">ID Barque:</label>
                <input type="text" id="ID_BARQUE" name="ID_BARQUE" class="form-control" value="" required>
            </div>

<!-- Section des ports -->
<div class="form-group">
    <label for="ID_PORT">Port:</label>
    <select id="ID_PORT" name="ID_PORT" class="form-control" required>
        <option value="">Choisissez un port</option> <!-- Option vide -->
        @foreach($ports as $port)
            <option value="{{ $port->ID_PORT }}">{{ $port->NOM_PORT }}</option>
        @endforeach
    </select>
</div>

<!-- Section des rais -->
<div class="form-group">
    <label for="ID_RAIS">Rais:</label>
    <select id="ID_RAIS" name="ID_RAIS" class="form-control" required>
        <option value="">Choisissez un rais</option> <!-- Option vide -->
        @foreach($raiss as $rais)
            <option value="{{ $rais->ID_RAIS }}">{{ $rais->NOM_RAIS }}</option>
        @endforeach
    </select>
</div>


            <div class="form-group">
                <label for="MARTICULE">Matricule:</label>
                <input type="text" id="MARTICULE" name="MARTICULE" class="form-control" value="" required>
            </div>

            <div class="form-group">
                <label for="EQUIPE_NOMBRE">Nombre d'équipe:</label>
                <input type="text" id="EQUIPE_NOMBRE" name="EQUIPE_NOMBRE" class="form-control" value="" required>
            </div>

            <div class="form-group">
                <label for="CODEBARRQUE">Code Barque:</label>
                <input type="text" id="CODEBARRQUE" name="CODEBARRQUE" class="form-control" value="" required>
            </div>

            <div class="form-group">
                <label for="MESURE">Mesure:</label>
                <input type="text" id="MESURE" name="MESURE" class="form-control" value="" required>
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
