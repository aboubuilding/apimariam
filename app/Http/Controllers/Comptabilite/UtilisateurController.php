<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Utilisateur;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UtilisateurController extends Controller
{

    /**
     * Affiche la  liste des  années
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= [] ;

        $utilisateurs = Utilisateur::getListe();

        foreach($utilisateurs as $utilisateur ){
            $data []  = array(

                "id"=>$utilisateur->id,
                "nom_prenom"=> $utilisateur->nom == null ? ' ' : $utilisateur->nom.' '.$utilisateur->prenom,
                "login"=> $utilisateur->login == null ? ' ' : $utilisateur->login,
                "role"=> $utilisateur->role == null ? ' ' : $utilisateur->role,
               


            );
        }

        return view('admin.utilisateur.index')->with(
            [
                'data' => $data,

            ]


        );


    }




    public function store(Request $request){



        $validator = \Validator::make($request->all(),[
            'nom'=>'required',
            'prenom'=>'required',
          




        ],[
            'nom.required'=>'Le nom   est obligatoire ',
            'prenom.required'=>'Le prenom est obligatoire  ',

           



        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{


                 Utilisateur::addUtilisateur(

                    $request->nom,
                    $request->prenom,
                    $request->login,

                    $request->email,
                    $request->mot_passe,
                    $request->photo,
                    $request->role
                   

                );



                return response()->json(['code'=>1,'msg'=>'Utilisateur    ajouté avec succès ']);
            }
        }



    public function update(Request $request, $id){


        $validator = \Validator::make($request->all(),[

            'nom'=>'required',
            'prenom'=>'required',


        ],[
             'nom.required'=>'Le nom   est obligatoire ',
            'prenom.required'=>'Le prenom est obligatoire  ',



        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{

               $utilisateur = Utilisateur::rechercheUtilisateurById($id);

               Utilisateur::updateUtilisateur(

                   $request->nom,
                    $request->prenom,
                    $request->login,

                    $request->email,
                    $request->mot_passe,
                    $request->photo,
                    $request->role,

                    $id


                );



                return response()->json(['code'=>1,'msg'=>'Utilisateur modifiée  avec succès ']);
            }
        }






    /**
     * Afficher  un Utilisateur
     *
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit ($id)
    {

        $utilisateur = Utilisateur::rechercheUtilisateurById($id);


        return response()->json(['code'=>1, 'Utilisateur'=>$utilisateur]);


    }



    /**
     * Supprimer   une  Utilisateur scolaire .
     *
     * @param  int  $int
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request,$id)
    {



        $delete = Utilisateur::deleteUtilisateur($id);


        // check data deleted or not
        if ($delete) {
            $success = true;
            $message = "Utilisateur  supprimée ";
        } else {
            $success = true;
            $message = "Utilisateur  non trouvée   ";
        }


        //  return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }









}
