<?php

namespace App\Models;

use App\Types\TypeStatus;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Compte extends Model
{
    use HasFactory;

    public function __construct(array $attributes=[])
    {
        parent::__construct($attributes);
        $this->etat=TypeStatus::ACTIF;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [


        'email',
        'mot_passe',
        'statut_compte',
        'espace_id',
        'parent_id',
        'password_reset',
       

        'etat',

    ];



    /**
     * Ajouter une Compte
     *

     * @param  string $email
     * @param  string $mot_passe
     * @param  int $statut_compte
     * @param  int $espace_id
     * @param  int $parent_id
     * @param  int $password_reset
    



     * @return Compte
     */

    public static function addCompte(
        $email,
        $mot_passe,
        $statut_compte,
        $espace_id,
        $parent_id,
        $password_reset
       

    )
    {
        $Compte= new Compte();


        $Compte->email = $email;
        $Compte->mot_passe = $mot_passe;
        $Compte->statut_compte = $statut_compte;
        $Compte->espace_id = $espace_id;
        $Compte->parent_id = $parent_id;
        $Compte->password_reset = $password_reset;
       
        $Compte->created_at = Carbon::now();

        $Compte->save();

        return $Compte;
    }

    /**
     * Affichage d'une année scolaire
     * @param int $id
     * @return  Compte
     */

    public static function rechercheCompteById($id)
    {

        return   $Compte= Compte::findOrFail($id);
    }

    /**
     * Update d'une Compte scolaire

      * @param  string $email
     * @param  string $mot_passe
     * @param  int $statut_compte
     * @param  int $espace_id
     * @param  int $password_reset
    

     * @param int $id
     * @return  Compte
     */

    public static function updateCompte(
         $email,
        $mot_passe,
        $statut_compte,
        $espace_id,
        $parent_id,
        $password_reset,
       
       
        $id)
    {


        return   $Compte= Compte::findOrFail($id)->update([



            'email' => $email,
            'mot_passe' => $mot_passe,
            'statut_compte' => $statut_compte,
            'espace_id' => $espace_id,
            'parent_id' => $parent_id,
            'password_reset' => $password_reset,
           
           
            'id' => $id,


        ]);
    }




    /**
     * Supprimer une Compte
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteCompte($id)
    {

        $Compte= Compte::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($Compte) {
            return 1;
        }
        return 0;
    }



    /**
     * Retourne la liste des Comptes

     * @param  int $espace_id
     * @param  int $parent_id
     * @param  int $statut_compte
 


     *
     * @return  array
     */

    public static function getListe(

        $espace_id = null,
        $parent_id = null,
        $statut_compte = null
      
        


    ) {

      

        $query =  Compte::where('etat', '!=', TypeStatus::SUPPRIME)
        ;

        if ($espace_id != null) {

            $query->where('espace_id', '=', $espace_id);
        }

         if ($parent_id != null) {

            $query->where('parent_id', '=', $parent_id);
        }

         if ($statut_compte != null) {

            $query->where('statut_compte', '=', $statut_compte);
        }

        
       

       


        return    $query->get();
    }



    /**
     * Retourne le nombre  des  activités 


     * @param  int $espace_id
     * @param  int $parent_id
     * @param  int $statut_compte

    

     * @return  int $total
     */

    public static function getTotal(
          $espace_id = null,
        $parent_id = null,
        $statut_compte = null
       


    ) {

        $query =   DB::table('comptes')


            ->where('comptes.etat', '!=', TypeStatus::SUPPRIME);


       if ($espace_id != null) {

            $query->where('espace_id', '=', $espace_id);
        }

         if ($parent_id != null) {

            $query->where('parent_id', '=', $parent_id);
        }

         if ($statut_compte != null) {

            $query->where('statut_compte', '=', $statut_compte);
        }

       


        $total = $query->count();

        if ($total) {

            return   $total;
        }

        return 0;
    }



    /**
     * Obtenir une année
     *
     */
    public function annee()
    {


        return $this->belongsTo(Annee::class, 'annee_id');
    }


   

     /**
     * Obtenir un utilisateur
     *
     */
    public function espace()
    {


        return $this->belongsTo(Espace::class, 'espace_id');
    }



     /**
     * Obtenir un utilisateur
     *
     */
    public function parent()
    {


        return $this->belongsTo(ParentEleve::class, 'parent_id');
    }



  

}
