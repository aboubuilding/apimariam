<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Depense;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DepenseController extends Controller
{

    /**
     * Affiche la  liste des  années
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= [] ;

        $depenses = Depense::getListe();

        foreach($depenses as $depense ){
            $data []  = array(

                "id"=>$depense->id,
                "libelle"=> $depense->libelle == null ? ' ' : $depense->libelle,
                "beneficaire"=> $depense->beneficaire == null ? ' ' : $depense->beneficaire,
                "date_depense"=> $depense->date_depense == null ? ' ' : $depense->date_depense,
                "montant"=> $depense->montant == null ? ' ' : $depense->montant,
                "statut_depense"=> $depense->statut_depense == null ? ' ' : $depense->statut_depense,



            );
        }

        return view('admin.depense.index')->with(
            [
                'data' => $data,

            ]


        );


    }




    public function store(Request $request){



        $validator = \Validator::make($request->all(),[
            'libelle'=>'required',
            'beneficaire'=>'required',
            'montant'=>'required',
           




        ],[
            'libelle.required'=>'Le libellé  est obligatoire ',
            'beneficaire.required'=>'La dépense est obligatoire ',
            'montant.required'=>'Le montant est obligatoire ',

         
           




        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{


                 Depense::addDepense(

                    $request->libelle,
                    $request->beneficaire,
                    $request->motif_depense,

                    $request->date_depense,
                    $request->montant,
                    $request->annee_id,
                    $request->utilisateur_id,
                    $request->statut_depense
                

                );



                return response()->json(['code'=>1,'msg'=>'Depense    ajoutée avec succès ']);
            }
        }



    public function update(Request $request, $id){


        $validator = \Validator::make($request->all(),[

           'libelle'=>'required',
            'beneficaire'=>'required',
            'montant'=>'required',
           
             

        ],[
             'libelle.required'=>'Le libellé  est obligatoire ',
            'beneficaire.required'=>'La dépense est obligatoire ',
            'montant.required'=>'Le montant est obligatoire ',

         


        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{

               $depense = Depense::rechercheDepenseById($id);

               Depense::updateDepense(

                 
                    $request->libelle,
                    $request->beneficaire,
                    $request->motif_depense,

                    $request->date_depense,
                    $request->montant,
                    $request->annee_id,
                    $request->utilisateur_id,
                    $request->statut_depense,
                ,

                    $id


                );



                return response()->json(['code'=>1,'msg'=>'Depense modifiée  avec succès ']);
            }
        }






    /**
     * Afficher  un Depense
     *
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit ($id)
    {

        $depense = Depense::rechercheDepenseById($id);


        return response()->json(['code'=>1, 'Depense'=>$depense]);


    }



    /**
     * Supprimer   une  Depense scolaire .
     *
     * @param  int  $int
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request,$id)
    {



        $delete = Depense::deleteDepense($id);


        // check data deleted or not
        if ($delete) {
            $success = true;
            $message = "Depense  supprimée ";
        } else {
            $success = true;
            $message = "Depense  non trouvée   ";
        }


        //  return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }









}
