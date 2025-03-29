<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Niveau;

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
        $data= [] ;

        $niveaus = Niveau::getListe();

        foreach($niveaus as $niveau ){
            $data []  = array(

                "id"=>$niveau->id,
                "libelle"=> $niveau->libelle == null ? ' ' : $niveau->libelle,
                "cycle"=> $niveau->cycle_id == null ? ' ' : $niveau->cycle->libelle,
                "numero_ordre"=> $niveau->numero_ordre == null ? ' ' : $niveau->numero_ordre,
               


            );
        }

        return view('admin.niveauindex')->with(
            [
                'data' => $data,

            ]


        );


    }




    public function store(Request $request){



        $validator = \Validator::make($request->all(),[
            'libelle'=>'required|string|max:25|unique:niveaux',
            'cycle_id'=>'required',
           




        ],[
            'libelle.required'=>'Le libellé  est obligatoire ',
            'libelle.string'=>'Le libellé  doit etre une chaine de caracteres ',

            'libelle.max'=>'Le libellé  ne doit pas depasser 25 caracteres ',
            'libelle.unique'=>'Le libellé  existe déjà ',
            'cycle_id.required'=>'Le cycle   existe déjà ',
           




        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{


                 Niveau::addNiveau(

                    $request->libelle,
                    $request->description,
                    $request->numero_ordre,

                    $request->cycle_id,
                  
                

                );



                return response()->json(['code'=>1,'msg'=>'Niveau    ajoutée avec succès ']);
            }
        }



    public function update(Request $request, $id){


        $validator = \Validator::make($request->all(),[

            'libelle'=>'required|string|max:25|unique:niveaux,libelle,'.$id,
             

        ],[
            'libelle.required'=>'Le libellé  est obligatoire ',
            'libelle.string'=>'Le libellé  doit etre une chaine de caracteres ',
            'libelle.unique'=>'Le libellé   existe déjà ',

             'libelle.max'=>'Le libellé   ne doit pas depasser 25 caracteres  ',

              'cycle_id.required'=>'Le cycle   existe déjà ',
              


        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{

               $niveau = Niveau::rechercheNiveauById($id);

               Niveau::updateNiveau(

                 
                     $request->libelle,
                    $request->description,
                    $request->numero_ordre,

                    $request->cycle_id,

                    $id


                );



                return response()->json(['code'=>1,'msg'=>'Niveau modifiée  avec succès ']);
            }
        }






    /**
     * Afficher  un Niveau
     *
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit ($id)
    {

        $niveau = Niveau::rechercheNiveauById($id);


        return response()->json(['code'=>1, 'Niveau'=>$niveau]);


    }



    /**
     * Supprimer   une  Niveau scolaire .
     *
     * @param  int  $int
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request,$id)
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
