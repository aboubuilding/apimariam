<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Paiement;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaiementController extends Controller
{

    /**
     * Affiche la  liste des  années
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= [] ;

        $paiements = Paiement::getListe();

        foreach($paiements as $paiement ){
            $data []  = array(

                "id"=>$paiement->id,
                "reference"=> $paiement->reference == null ? ' ' : $paiement->reference,

                  "montant"=> Details::getTotal(),
                "date_paiement"=> $paiement->date_paiement == null ? ' ' : $paiement->date_paiement,
                "mode_paiement"=> $paiement->mode_paiement == null ? ' ' : $paiement->mode_paiement,
                "inscription"=> $paiement->inscription_id == null ? ' ' : $paiement->inscription_id,
                "utilisateur"=> $paiement->utilisateur_id == null ? ' ' : $paiement->statut,
                "statut_paiement"=> $paiement->statut_paiement == null ? ' ' : $paiement->statut_paiement,



            );
        }

        return view('admin.paiement.index')->with(
            [
                'data' => $data,

            ]


        );


    }




    public function store(Request $request){



        $validator = \Validator::make($request->all(),[
            'payeur'=>'required',
            'telephone_payeur'=>'required',
            'mode_paiement'=>'required',
            'inscription_id'=>'required',
           




        ],[
            'payeur.required'=>'Le payeur   est obligatoire ',
            'telephone_payeur.required'=>'Le telephone du payeur est obligatoire ',

            'mode_paiement.required'=>'Le mode de paiement est obligatoire  ',
            'inscription_id.required'=>"Le choix de l' leve est obligatoire ",
           




        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{


                 Paiement::addPaiement(

                    $request->reference,
                    $request->payeur,
                    $request->motif_suppression,

                    $request->date_paiement,
                    $request->statut_paiement,
                    $request->mode_paiement,
                    $request->inscription_id,
                    $request->utilisateur_id,
                    $request->cheque_id,
                    $request->annee_id,
        
                

                );



                return response()->json(['code'=>1,'msg'=>'Paiement    ajouté avec succès ']);
            }
        }



    public function update(Request $request, $id){


        $validator = \Validator::make($request->all(),[

           'payeur'=>'required',
            'telephone_payeur'=>'required',
            'mode_paiement'=>'required',
            'inscription_id'=>'required',

        ],[
            'payeur.required'=>'Le payeur   est obligatoire ',
            'telephone_payeur.required'=>'Le telephone du payeur est obligatoire ',

            'mode_paiement.required'=>'Le mode de paiement est obligatoire  ',
            'inscription_id.required'=>"Le choix de l' leve est obligatoire ",
           
              


        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{

               $paiement = Paiement::recherchePaiementById($id);

               Paiement::updatePaiement(

                 
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



                return response()->json(['code'=>1,'msg'=>'Paiement modifié  avec succès ']);
            }
        }






    /**
     * Afficher  un Paiement
     *
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit ($id)
    {

        $paiement = Paiement::recherchePaiementById($id);


        return response()->json(['code'=>1, 'Paiement'=>$paiement]);


    }



    /**
     * Supprimer   une  Paiement scolaire .
     *
     * @param  int  $int
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request,$id)
    {



        $delete = Paiement::deletePaiement($id);


        // check data deleted or not
        if ($delete) {
            $success = true;
            $message = "Paiement  supprimée ";
        } else {
            $success = true;
            $message = "Paiement  non trouvée   ";
        }


        //  return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }









}
