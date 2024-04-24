<?php

namespace App\Http\Controllers;
use App\Models\Port; 
use Illuminate\Http\Request;
use App\Models\Region;
use Dompdf\Options;
use Dompdf\Dompdf;

class PortController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ports = port::all(); // Exemple de récupération de toutes les ports
    
        // Retourner la vue avec les données
        return view('port.index', ['ports' => $ports]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Récupérer toutes les instances de Region avec leurs ID et noms
        $regions = Region::all(['ID_REGION', 'NOM_REGION']);
        
        // Passer les régions récupérées à la vue 'port.create' pour affichage dans le formulaire
        return view('port.create', ['regions' => $regions]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'ID_PORT' => 'required|string|unique:port,ID_PORT',
            'ID_REGION' => 'required|string',
            'NOM_PORT' => 'required|string',
            'LATITUDE' => 'required|numeric',
            'LONGITUDE' => 'required|numeric',
        ]);
    
        // Création d'une nouvelle instance du modèle Port avec les données validées
        $port = new Port(); // Ensure 'Port' is capitalized
        $port->ID_PORT = $validatedData['ID_PORT']; // Set the attributes accordingly
        $port->ID_REGION = $validatedData['ID_REGION'];
        $port->NOM_PORT = $validatedData['NOM_PORT'];
        $port->LATITUDE = $validatedData['LATITUDE'];
        $port->LONGITUDE = $validatedData['LONGITUDE'];
    
        // Sauvegarder le port dans la base de données
        $port->save();
    
        // Retourner une réponse appropriée, par exemple une redirection ou un message JSON
        return redirect()->route('port.index')->with('success', 'Port ajouté avec succès.');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $ID_PORT)
    {
           // Rechercher la barque avec l'identifiant spécifié dans la base de données
           $port = port::findOrFail($ID_PORT);
    
           // Passer la barque récupérée à la vue pour affichage
           return view('port.show', ['port' => $port]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
             // Rechercher la barque avec l'identifiant spécifié dans la base de données
             $port = port::findOrFail($id);
    
             // Passer la barque récupérée au formulaire d'édition pour affichage
             return view('port.edit', ['port' => $port]);
    }


    /**
     * Update the specified resource in storage.
     */public function update(Request $request, string $id)
{
    // Recherche du port à mettre à jour
    $port = Port::findOrFail($id);

    // Validation des données du formulaire
    $validatedData = $request->validate([
        'ID_PORT' => 'required|string|unique:port,ID_PORT,'.$id.',ID_PORT',
        'ID_REGION' => 'required|string',
        'NOM_PORT' => 'required|string',
        'LATITUDE' => 'required|numeric',
        'LONGITUDE' => 'required|numeric',
    ]);

    // Mise à jour des attributs du port
    $port->ID_PORT = $validatedData['ID_PORT'];
    $port->ID_REGION = $validatedData['ID_REGION'];
    $port->NOM_PORT = $validatedData['NOM_PORT'];
    $port->LATITUDE = $validatedData['LATITUDE'];
    $port->LONGITUDE = $validatedData['LONGITUDE'];

    // Enregistrement des modifications dans la base de données
    $port->save();

    // Retourner une réponse appropriée, par exemple une redirection ou un message JSON
    return redirect()->route('port.index')->with('success', 'Port mis à jour avec succès.');
}

    /**
     * Remove the specified resource from storage.
     */


     public function destroy(string $id)
     {
         // Rechercher le port avec l'identifiant spécifié dans la base de données
         $port = Port::findOrFail($id);
     
         // Vérifier s'il existe des enregistrements de barques associées à ce port
         if ($port->barques()->exists()) {
             // Supprimer toutes les barques associées à ce port
             $port->barques()->delete();
         }
     
         // Supprimer le port de la base de données
         $port->delete();
     
         // Rediriger l'utilisateur vers la page de liste des ports avec un message de succès
         return redirect()->route('port.index')->with('success', 'Port supprimé avec succès.');
     }
     /*
     function print($ID_PORT) {
        try {
            // Recherchez le port avec l'identifiant spécifié dans la base de données
            $port = Port::findOrFail($ID_PORT);
            
            // Retournez une vue spéciale pour l'impression avec le port à afficher
            return view('port.print', ['port' => $port]);
        } catch (\Exception $e) {
            // Gérez l'erreur ici, par exemple redirigez l'utilisateur vers une page d'erreur
            return redirect()->route('error')->with('message', 'Le port spécifié est introuvable.');
        }
    }*/
    public function print($print = false)
    {
        $port = port::all();

        if ($port) {
            return view('port.print', compact('port')); // Utiliser une vue différente pour l'impression
        }

        return view('port.print', compact('port'));
    }
    /*
    public function generatePDF($ID_PORT)
    {
        // Rechercher le port avec l'identifiant spécifié dans la base de données
        $port = Port::findOrFail($ID_PORT);
        
        // Créer une nouvelle instance de Dompdf
        $dompdf = new Dompdf();
    
        // Ajouter le contenu HTML à générer en PDF
        $html = view('port.print', ['port' => $port])->render();
    
        // Charger le contenu HTML dans Dompdf
        $dompdf->loadHtml($html);
    
        // Rendre le PDF
        $dompdf->render();
    
        // Générer le nom du fichier PDF
        $fileName = 'fiche_port_'.$port->ID_PORT.'.pdf';
    
        // Télécharger le PDF avec le nom spécifié
        return $dompdf->stream($fileName);
    }*/
    public function generatePDF($ID_PORT)
{
    // Rechercher la barque avec l'identifiant spécifié dans la base de données
    $port = port::findOrFail($ID_PORT);
    
    // Créer une nouvelle instance de Dompdf
    $dompdf = new Dompdf();

    // Ajouter le contenu HTML à générer en PDF
    $html = view('port.print', ['port' => $port])->render();

    // Charger le contenu HTML dans Dompdf
    $dompdf->loadHtml($html);

    // Rendre le PDF
    $dompdf->render();

    // Générer le nom du fichier PDF
    $fileName = 'fiche_port_'.$port->ID_PORT.'.pdf';

    // Télécharger le PDF avec le nom spécifié
    return $dompdf->stream($fileName);
}
    
}
