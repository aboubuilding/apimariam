<?php

namespace App\Http\Controllers\Comptabilite;

use App\Http\Controllers\Controller;
use App\Models\Niveau;


use App\Types\StatutNiveau;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NiveauController extends Controller
{

    /**
     * Affiche la  liste des  années
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];

        $niveaux = Niveau::getListe();

       

        return view('comptabilite.pageNiveau')->with(
            [
                'data' => $data,

            ]


        );
    }




    public function store(Request $request)
    {



        $validator = \Validator::make($request->all(), [
            'libelle' => 'required|string|max:20|unique:Niveaus',
            'cycle_id' => 'required|string|max:20|unique:Niveaus',


        ], [
            'libelle.required' => 'Le libellé  est obligatoire ',

            'libelle.string' => 'Le libellé  doit etre une chaine de caracteres ',
            'libelle.unique' => 'Le libellé  existe déjà ',
             'libelle.max' => 'Le libellé  ne peut pas depasser 20 caracteres  ',



        ]);

        if (!$validator->passes()) {
            return response()->json(['code' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            Niveau::addNiveau(

                $request->libelle,
                $request->date_rentree,

                $request->date_fin,
                $request->date_ouverture_inscription,
                $request->date_fermeture_reinscription,

                StatutNiveau::NON_OUVERT,





            );

            return response()->json(['code' => 1, 'msg' => 'Année ajoutée avec succès ']);
        }
    }



    public function update(Request $request, $id)
    {


        $validator = \Validator::make($request->all(), [

             'libelle' => 'required|string|unique:Niveaus',





        ], [
            'libelle.required' => 'Le libellé  est obligatoire ',
            'libelle.string' => 'Le libellé  doit etre une chaine de caracteres ',
            'libelle.unique' => 'Le libellé  existe déjà ',



        ]);

        if (!$validator->passes()) {
            return response()->json(['code' => 0, 'error' => $validator->errors()->toArray()]);
        } else {

            $Niveau = Niveau::rechercheNiveauById($id);

                Niveau::updateNiveau(

                $request->libelle,
                $request->date_rentree,

                $request->date_fin,
                $request->date_ouverture_inscription,
                $request->date_fermeture_reinscription,

                    $Niveau->statut_Niveau,

                $id


            );



            return response()->json(['code' => 1, 'msg' => 'Niveau modifiée  avec succès ']);
        }
    }






    /**
     * Afficher  un Niveau
     *
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit($id)
    {

        $Niveau = Niveau::rechercheNiveauById($id);


        return response()->json(['code' => 1, 'Niveau' => $Niveau]);
    }



    /**
     * Supprimer   une  Niveau scolaire .
     *
     * @param  int  $int
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request, $id)
    {



        $delete = Niveau::deleteNiveau($id);


        // check data deleted or not
        if ($delete) {
            $success = true;
            $message = "Niveau  supprimée ";
        } else {
            $success = true;
            $message = "Niveau  non trouvée   ";
        }


        //  return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }
}
