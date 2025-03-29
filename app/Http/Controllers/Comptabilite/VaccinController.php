<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vaccin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VaccinController extends Controller
{

    /**
     * Affiche la  liste des  années
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= [] ;

        $Vaccins = Vaccin::getListe();

        foreach($Vaccins as $Vaccin ){
            $data []  = array(

                "id"=>$Vaccin->id,
                "libelle"=> $Vaccin->libelle == null ? ' ' : $Vaccin->libelle,
                "nb_eleve"=> 0,
                



            );
        }

        return view('admin.Vaccin.index')->with(
            [
                'data' => $data,

            ]


        );


    }




    public function store(Request $request){



        $validator = \Validator::make($request->all(),[
            'libelle'=>'required|string|max:25|unique:Vaccins',
           




        ],[
            'libelle.required'=>'Le libellé  est obligatoire ',
            'libelle.string'=>'Le libellé  doit etre une chaine de caracteres ',

            'libelle.max'=>'Le libellé  ne doit pas depasser 25 caracteres ',
            'libelle.unique'=>'Le libellé  existe déjà ',
            



        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{


                 Vaccin::addVaccin(

                    $request->libelle,
                    $request->description,
                    

                );



                return response()->json(['code'=>1,'msg'=>'Année   ajoutée avec succès ']);
            }
        }



    public function update(Request $request, $id){


        $validator = \Validator::make($request->all(),[

            'libelle'=>'required|string|max:25|unique:Vaccins,libelle,'.$id,
              


        ],[
            'libelle.required'=>'Le libellé  est obligatoire ',
            'libelle.string'=>'Le libellé  doit etre une chaine de caracteres ',
            'libelle.unique'=>'Le libellé   existe déjà ',

             'libelle.max'=>'Le libellé   ne doit pas depasser 25 caracteres  ',
              


        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{

               $Vaccin = Vaccin::rechercheVaccinById($id);

               Vaccin::updateVaccin(

                  $request->libelle,
                    $request->date_rentree,
                    $request->description,

                   

                    $id


                );



                return response()->json(['code'=>1,'msg'=>'Vaccin modifiée  avec succès ']);
            }
        }






    /**
     * Afficher  un Vaccin
     *
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit ($id)
    {

        $Vaccin = Vaccin::rechercheVaccinById($id);


        return response()->json(['code'=>1, 'Vaccin'=>$Vaccin]);


    }



    /**
     * Supprimer   une  Vaccin scolaire .
     *
     * @param  int  $int
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request,$id)
    {



        $delete = Vaccin::deleteVaccin($id);


        // check data deleted or not
        if ($delete) {
            $success = true;
            $message = "Vaccin  supprimée ";
        } else {
            $success = true;
            $message = "Vaccin  non trouvée   ";
        }


        //  return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }









}
