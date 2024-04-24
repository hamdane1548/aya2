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
            <div class="form-group">
                <label for="ID_BARQUE">ID Barque:</label>
                <input type="text" id="ID_BARQUE" name="ID_BARQUE" class="form-control" value="{{ $barque->ID_BARQUE }}" required>
            </div>

            <div class="form-group">
                <label for="ID_PORT">Port:</label>
                <input type="text" id="ID_PORT" name="ID_PORT" class="form-control" value="{{ $barque->ID_PORT }}" required>
            </div>

            <div class="form-group">
                <label for="ID_RAIS">Rais:</label>
                <input type="text" id="ID_RAIS" name="ID_RAIS" class="form-control" value="{{ $barque->ID_RAIS }}" required>
            </div>

            <div class="form-group">
                <label for="MARTICULE">Matricule:</label>
                <input type="text" id="MARTICULE" name="MARTICULE" class="form-control" value="{{ $barque->MARTICULE }}" required>
            </div>

            <div class="form-group">
                <label for="EQUIPE_NOMBRE">Nombre d'équipe:</label>
                <input type="text" id="EQUIPE_NOMBRE" name="EQUIPE_NOMBRE" class="form-control" value="{{ $barque->EQUIPE_NOMBRE }}" required>
            </div>

            <div class="form-group">
                <label for="CODEBARRQUE">Code Barque:</label>
                <input type="text" id="CODEBARRQUE" name="CODEBARRQUE" class="form-control" value="{{ $barque->CODEBARRQUE }}" required>
            </div>

            <div class="form-group">
                <label for="MESURE">Mesure:</label>
                <input type="text" id="MESURE" name="MESURE" class="form-control" value="{{ $barque->MESURE }}" required>
            </div>
            

            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="{{ route('barque.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
