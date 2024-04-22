<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Barque</title>
</head>
<body>

@extends('dashboard')

@section('barque')


<div class="container mt-5" id="main-content" >
        <h2 class="bg-primary text-white p-3">Gestion des Barques</h2>
        <a href="{{route('barque.create')}}">Ajouter un Barque</a>
    
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID_PORT</th>
                    <th>ID_RAIS</th>
                    <th>MARTICULE</th>
                    <th>NOMBRE D'EQUIPE</th>
                    <th>CODE BARRQUE</th>
                    <th>MESURE</th>
                    <th>FONCTIONNALITE</th>
                </tr>
            </thead>
            <tbody>
    @foreach($barques as $barque)
        <tr>
            <td>{{ $barque->ID_BARQUE }}</td>
            <td>{{ $barque->ID_PORT }}</td>
            <td>{{ $barque->ID_RAIS }}</td>
            <td>{{ $barque->MARTICULE }}</td>
            <td>{{ $barque->EQUIPE_NOMBRE }}</td>
            <td>{{ $barque->CODEBARRQUE }}</td>
          
            <td>{{ $barque->MESURE }}</td>
           
            <td>
                <a href="{{ route('barque.edit',$barque) }}" class="btn btn-primary">
                    <i class="bi bi-pen">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                        </svg>
                    </i>
                </a>
                <form action="{{ route('barque.destroy',$barque) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce barque ?')">
                        <i class="bi bi-trash">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                            </svg>
                        </i>
                    </button>
                </form>
              <!-- Barques index view -->
<!-- Barques index view -->
<a href="{{ route('barque.pdf', $barque->ID_BARQUE) }}" class="btn btn-primary">Enregistrer pdf</a>
<!-- Barques index view -->
<a href="#" onclick="printBarque('{{ $barque->ID_BARQUE }}')" class="btn btn-primary">Imprimer fiche</a>


  
<script>
    function printBarque(ID_BARQUE) {
        // Ouverture de la boîte de dialogue d'impression
        window.print();
    }
</script>
            </td>
        </tr>
    @endforeach
</tbody>

        </table>
    </div>
    @endsection

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</body>
</html>
