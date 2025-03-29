<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Specialite;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SpecialiteController extends Controller
{

    /**
     * Affiche la  liste des  années
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= [] ;

        $specialites = Specialite::getListe();

        foreach($specialites as $specialite ){
            $data []  = array(

                "id"=>$specialite->id,
                "libelle"=> $specialite->libelle == null ? ' ' : $specialite->libelle,
                


            );
        }

        return view('admin.specialite.index')->with(
            [
                'data' => $data,

            ]


        );


    }




    public function store(Request $request){



        $validator = \Validator::make($request->all(),[
            'libelle'=>'required|string|max:25|unique:Specialites',
            



        ],[
            'libelle.required'=>'Le libellé  est obligatoire ',
            'libelle.string'=>'Le libellé  doit etre une chaine de caracteres ',

            'libelle.max'=>'Le libellé  ne doit pas depasser 25 caracteres ',
            'libelle.unique'=>'Le libellé  existe déjà ',
            

        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{


                 Specialite::addSpecialite(

                    $request->libelle,
                   

                );



                return response()->json(['code'=>1,'msg'=>'Spécialité    ajoutée avec succès ']);
            }
        }



    public function update(Request $request, $id){


        $validator = \Validator::make($request->all(),[

            'libelle'=>'required|string|max:25|unique:Specialites,libelle,'.$id,
             


        ],[
            'libelle.required'=>'Le libellé  est obligatoire ',
            'libelle.string'=>'Le libellé  doit etre une chaine de caracteres ',
            'libelle.unique'=>'Le libellé   existe déjà ',

             'libelle.max'=>'Le libellé   ne doit pas depasser 25 caracteres  ',
              


        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{

               $specialite = Specialite::rechercheSpecialiteById($id);

               Specialite::updateSpecialite(

                  $request->libelle,
                    

                    $id


                );



                return response()->json(['code'=>1,'msg'=>'Specialite modifiée  avec succès ']);
            }
        }






    /**
     * Afficher  un Specialite
     *
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit ($id)
    {

        $specialite = Specialite::rechercheSpecialiteById($id);


        return response()->json(['code'=>1, 'Specialite'=>$specialite]);


    }



    /**
     * Supprimer   une  Specialite scolaire .
     *
     * @param  int  $int
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request,$id)
    {



        $delete = Specialite::deleteSpecialite($id);


        // check data deleted or not
        if ($delete) {
            $success = true;
            $message = "Specialite  supprimée ";
        } else {
            $success = true;
            $message = "Specialite  non trouvée   ";
        }


        //  return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }









}
