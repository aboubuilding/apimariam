<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Caisse;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CaisseController extends Controller
{

    /**
     * Affiche la  liste des  années
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= [] ;

        $caisses = Caisse::getListe();

        foreach($caisses as $caisse ){
            $data []  = array(

                "id"=>$caisse->id,
                "solde_initial"=> $caisse->solde_final == null ? ' ' : $caisse->solde_final,
                "solde_final"=> $caisse->solde_final == null ? ' ' : $caisse->solde_final,
                "date_ouverture"=> $caisse->date_ouverture == null ? ' ' : $caisse->date_ouverture,
                "date_cloture"=> $caisse->date_cloture == null ? ' ' : $caisse->date_cloture,
                "statut"=> $caisse->statut == null ? ' ' : $caisse->statut,



            );
        }

        return view('admin.caisse.index')->with(
            [
                'data' => $data,

            ]


        );


    }




    public function store(Request $request){



        $validator = \Validator::make($request->all(),[
            'libelle'=>'required|string|max:25|unique:Caisses',
           




        ],[
            'libelle.required'=>'Le libellé  est obligatoire ',
            'libelle.string'=>'Le libellé  doit etre une chaine de caracteres ',

            'libelle.max'=>'Le libellé  ne doit pas depasser 25 caracteres ',
            'libelle.unique'=>'Le libellé  existe déjà ',
           




        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{


                 Caisse::addCaisse(

                    $request->libelle,
                    $request->solde_initial,
                    $request->solde_final,

                    $request->date_ouverture,
                    $request->date_cloture,
                    $request->statut,
                    $request->utilisateur_id,
                    $request->annee_id
                

                );



                return response()->json(['code'=>1,'msg'=>'Caisse    ajoutée avec succès ']);
            }
        }



    public function update(Request $request, $id){


        $validator = \Validator::make($request->all(),[

            'libelle'=>'required|string|max:25|unique:caisses,libelle,'.$id,
             

        ],[
            'libelle.required'=>'Le libellé  est obligatoire ',
            'libelle.string'=>'Le libellé  doit etre une chaine de caracteres ',
            'libelle.unique'=>'Le libellé   existe déjà ',

             'libelle.max'=>'Le libellé   ne doit pas depasser 25 caracteres  ',
              


        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{

               $caisse = Caisse::rechercheCaisseById($id);

               Caisse::updateCaisse(

                 
                    $request->libelle,
                    $request->solde_initial,
                    $request->solde_final,

                    $request->date_ouverture,
                    $request->date_cloture,
                    $request->statut,
                    $request->utilisateur_id,
                    $request->annee_id,

                    $id


                );



                return response()->json(['code'=>1,'msg'=>'Caisse modifiée  avec succès ']);
            }
        }






    /**
     * Afficher  un Caisse
     *
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit ($id)
    {

        $caisse = Caisse::rechercheCaisseById($id);


        return response()->json(['code'=>1, 'Caisse'=>$caisse]);


    }



    /**
     * Supprimer   une  Caisse scolaire .
     *
     * @param  int  $int
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request,$id)
    {



        $delete = Caisse::deleteCaisse($id);


        // check data deleted or not
        if ($delete) {
            $success = true;
            $message = "Caisse  supprimée ";
        } else {
            $success = true;
            $message = "Caisse  non trouvée   ";
        }


        //  return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }









}
