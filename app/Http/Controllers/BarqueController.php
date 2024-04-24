<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barque; 
use App\Models\Port; 
use App\Models\Rais; 
use Dompdf\Dompdf;
use Dompdf\Options;

class BarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Logique pour récupérer les données des barques
        $barques = Barque::all(); // Exemple de récupération de toutes les barques
    
        // Retourner la vue avec les données
        return view('barque.index', ['barques' => $barques]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Récupérer toutes les instances de Port avec leurs noms
        $ports = Port::all('NOM_PORT', 'ID_PORT');
        
        // Récupérer toutes les instances de Rais avec leurs noms
        $raiss = Rais::all('NOM_RAIS', 'ID_RAIS');
        
        // Passer les ports et raiss récupérées à la vue 'barque.create' pour affichage dans le formulaire
        return view('barque.create', ['ports' => $ports, 'raiss' => $raiss]);
    
          
     }
     

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'ID_BARQUE' => 'required',
            'ID_PORT' => 'required',
            'ID_RAIS' => 'required',
            'MARTICULE' => 'required',
            'EQUIPE_NOMBRE' => 'required',
            'CODEBARRQUE' => 'required',
            'MESURE' => 'required',
        ]);

        // Créer une nouvelle instance de Barque avec les données du formulaire
        $barque = new Barque();
        $barque->ID_BARQUE = $request->input('ID_BARQUE');
        $barque->ID_PORT = $request->input('ID_PORT');
        $barque->ID_RAIS = $request->input('ID_RAIS');
        $barque->MARTICULE = $request->input('MARTICULE');
        $barque->EQUIPE_NOMBRE = $request->input('EQUIPE_NOMBRE');
        $barque->CODEBARRQUE = $request->input('CODEBARRQUE');
        $barque->MESURE = $request->input('MESURE');

        // Enregistrer la nouvelle barque dans la base de données
        $barque->save();

        // Rediriger l'utilisateur vers la page d'index des barques avec un message de succès
        return redirect()->route('barque.index')->with('success', 'Barque ajoutée avec succès.');
    }

    public function show(string $ID_BARQUE)
    {
        // Rechercher la barque avec l'identifiant spécifié dans la base de données
        $barque = Barque::findOrFail($ID_BARQUE);
    
        // Passer la barque récupérée à la vue pour affichage
        return view('barque.show', ['barque' => $barque]);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
 
    public function edit(string $id)
    {
        // Rechercher la barque avec l'identifiant spécifié dans la base de données
        $barque = Barque::findOrFail($id);
    
        // Passer la barque récupérée au formulaire d'édition pour affichage
        return view('barque.edit', ['barque' => $barque]);
    }
    

    /**
     * Update the specified resource in storage.
     */// BarqueController.php

public function update(Request $request, string $id)
{
    // Valider les données du formulaire
    $request->validate([
        'ID_BARQUE' => 'required',
        'ID_PORT' => 'required',
        'ID_RAIS' => 'required',
        'MARTICULE' => 'required',
        'EQUIPE_NOMBRE' => 'required',
        'CODEBARRQUE' => 'required',
        'MESURE' => 'required',
    ]);

    // Rechercher la barque avec l'identifiant spécifié dans la base de données
    $barque = Barque::findOrFail($id);

    // Mettre à jour les attributs de la barque avec les nouvelles valeurs du formulaire
    $barque->ID_BARQUE = $request->input('ID_BARQUE');
    $barque->ID_PORT = $request->input('ID_PORT');
    $barque->ID_RAIS = $request->input('ID_RAIS');
    $barque->MARTICULE = $request->input('MARTICULE');
    $barque->EQUIPE_NOMBRE = $request->input('EQUIPE_NOMBRE');
    $barque->CODEBARRQUE = $request->input('CODEBARRQUE');
    $barque->MESURE = $request->input('MESURE');

    // Enregistrer les modifications dans la base de données
    $barque->save();

    // Rediriger l'utilisateur vers la page de liste des barques avec un message de succès
    return redirect()->route('barque.index')->with('success', 'Barque mise à jour avec succès.');
}


    /**
     * Remove the specified resource from storage.
     */
    
     public function destroy(string $id)
     {
         // Rechercher la barque avec l'identifiant spécifié dans la base de données
         $barque = Barque::findOrFail($id);
     
         // Supprimer la barque de la base de données
         $barque->delete();
     
         // Rediriger l'utilisateur vers la page de liste des barques avec un message de succès
         return redirect()->route('barque.index')->with('success', 'Barque supprimée avec succès.');
     }
     public function print($ID_BARQUE)
{
    // Recherchez la barque avec l'identifiant spécifié dans la base de données
    $barque = Barque::findOrFail($ID_BARQUE);
    
    // Retournez une vue spéciale pour l'impression avec la barque à afficher
    return view('barque.print', ['barque' => $barque]);
}

public function generatePDF($ID_BARQUE)
{
    // Rechercher la barque avec l'identifiant spécifié dans la base de données
    $barque = Barque::findOrFail($ID_BARQUE);
    
    // Créer une nouvelle instance de Dompdf
    $dompdf = new Dompdf();

    // Ajouter le contenu HTML à générer en PDF
    $html = view('barque.print', ['barque' => $barque])->render();

    // Charger le contenu HTML dans Dompdf
    $dompdf->loadHtml($html);

    // Rendre le PDF
    $dompdf->render();

    // Générer le nom du fichier PDF
    $fileName = 'fiche_barque_'.$barque->ID_BARQUE.'.pdf';

    // Télécharger le PDF avec le nom spécifié
    return $dompdf->stream($fileName);
}

    }
