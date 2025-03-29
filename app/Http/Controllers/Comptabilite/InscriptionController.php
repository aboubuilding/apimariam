<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inscription;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InscriptionController extends Controller
{

    /**
     * Affiche la  liste des  années
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= [] ;

        $inscriptions = Inscription::getListe();

        foreach($inscriptions as $inscription ){
            $data []  = array(

                "id"=>$inscription->id,
                "matricule"=> $inscription->matricule == null ? ' ' : $inscription->matricule,

                 "nom_prenom"=> $inscription->eleve_id == null ? ' ' : $inscription->eleve->nom. ''.$inscription->eleve->prenom,

                "date_naissance"=> $inscription->eleve->date_naissance == null ? ' ' : $inscription->eleve->date_naissance,
                "sexe"=> $inscription->sexe == null ? ' ' : $inscription->sexe,
                "photo"=> $inscription->photo == null ? ' ' : $inscription->photo,
                "utilisateur"=> $inscription->utilisateur_id == null ? ' ' : $inscription->statut,
                "statut_Inscription"=> $inscription->statut_Inscription == null ? ' ' : $inscription->statut_Inscription,



            );
        }

        return view('admin.inscription.index')->with(
            [
                'data' => $data,

            ]


        );


    }




    public function store(Request $request){



        $validator = \Validator::make($request->all(),[
            'payeur'=>'required',
            'telephone_payeur'=>'required',
            'mode_Inscription'=>'required',
            'inscription_id'=>'required',
           




        ],[
            'payeur.required'=>'Le payeur   est obligatoire ',
            'telephone_payeur.required'=>'Le telephone du payeur est obligatoire ',

            'mode_inscription.required'=>'Le mode de Inscription est obligatoire  ',
            'inscription_id.required'=>"Le choix de l' leve est obligatoire ",
           




        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{



 // Enregistrement du Inscription 

             DB::beginTransaction();
    try {



          $ligne_details = $request->ligne_details; 


            $inscription =  Inscription::addInscription(

                    $request->reference,
                    $request->payeur,
                    $request->motif_suppression,

                    $request->date_Inscription,
                    $request->statut_Inscription,
                    $request->mode_Inscription,
                    $request->inscription_id,
                    $request->utilisateur_id,
                    $request->cheque_id,
                    $request->annee_id
        
                

                );



                 if ($ligne_details) {

                  foreach ($ligne_details as $ligne) {



                          Detail::addDetail(
                              $ligne['montant'],
                               $ligne['libelle'] ,
                                $inscription->id,
                              $ligne['type_Inscription'],
                              $ligne['inscription_id'],
                              $ligne['frais_ecole_id'],
                              $ligne['statut_Inscription'],
                              $ligne['annee_id'],
                              $ligne['souscription_id'],
                              $ligne['caisse_id'],
                              $ligne['comptable_id'],
                              $ligne['caissier_id'],
                              $ligne['date_Inscription'],
                              $ligne['date_encaissement']
                              




                          );

                     


                  }
              }


               DB::commit();

                return response()->json(
                    [
                        'code' => 1,
                        'msg' => 'Inscription  ajoutée avec succès ',
                        'Inscription_reference' => $numero,
                        'montant' => Detail::getMontantTotal($annee_id, $inscription->id)




                    ]

                );
   } catch (\Exception $e) {
                // En cas d'erreur, annulez la transaction
                DB::rollback();

                // Gérez l'erreur ou lancez une exception personnalisée
                // throw new CustomException('Une erreur s'est produite');

                return response()->json(
                    [
                        'code' => 0,
                        'msg' => "Une erreur s'est produite !",
                        'data' => $request->all()


                    ]

                );
            }


                
            }
        }



    public function update(Request $request, $id){


        $validator = \Validator::make($request->all(),[

           'payeur'=>'required',
            'telephone_payeur'=>'required',
            'mode_Inscription'=>'required',
            'inscription_id'=>'required',

        ],[
            'payeur.required'=>'Le payeur   est obligatoire ',
            'telephone_payeur.required'=>'Le telephone du payeur est obligatoire ',

            'mode_inscription.required'=>'Le mode de Inscription est obligatoire  ',
            'inscription_id.required'=>"Le choix de l' leve est obligatoire ",
           
              


        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{

               $inscription = Inscription::rechercheInscriptionById($id);

               Inscription::updateInscription(

                 
                    $request->reference,
                    $request->payeur,
                    $request->motif_suppression,

                    $request->date_Inscription,
                    $request->statut_Inscription,
                    $request->mode_Inscription,
                    $request->inscription_id,
                    $request->utilisateur_id,
                    $request->cheque_id,
                    $request->annee_id,

                    $id


                );



                return response()->json(['code'=>1,'msg'=>'Inscription modifié  avec succès ']);
            }
        }






    /**
     * Afficher  un Inscription
     *
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit ($id)
    {

        $inscription = Inscription::rechercheInscriptionById($id);


        return response()->json(['code'=>1, 'Inscription'=>$inscription]);


    }



    /**
     * Supprimer   une  Inscription scolaire .
     *
     * @param  int  $int
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request,$id)
    {



        $delete = Inscription::deleteInscription($id);


        // check data deleted or not
        if ($delete) {
            $success = true;
            $message = "Inscription  supprimée ";
        } else {
            $success = true;
            $message = "Inscription  non trouvée   ";
        }


        //  return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }









}
