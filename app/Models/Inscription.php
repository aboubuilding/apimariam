<?php

namespace App\Models;

use App\Types\StatutValidation;
use App\Types\TypeStatus;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Inscription extends Model
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


        'date_inscription',
        'eleve_id',
        'cycle_id',
        'niveau_id',
        'last_niveau_id',
        'classe_id',
        'espace_id',
        'type_inscription',
        'statut',
        'annee_id',
        
        'programme_provenance',

        
        'adresse_map',
        'quartier_id',


        'etat',

    ];



    /**
     * Ajouter une Inscription
     *


     * @param  date $date_inscription
     * @param  int $eleve_id
     * @param  int $cycle_id
     * @param  int $niveau_id
     * @param  int $last_niveau_id
     * @param  int $classe_id
     * @param  int $espace_id
     * @param  int $type_inscription
     * @param  int $statut
     * @param  int $annee_id
    
     * @param  int $programme_provenance
     
     * @param  int $adresse_map


       * @param  int $quartier_id




     * @return Inscription
     */

    public static function addInscription(
        $date_inscription,
        $eleve_id,
        $cycle_id,
        $niveau_id,
        $last_niveau_id,
        $classe_id,
        $espace_id,
        $type_inscription,
        $statut,
        $annee_id,
       
        $programme_provenance,
        
        $adresse_map,
        $quartier_id

    )
    {
        $inscription = new Inscription();


        $inscription->date_inscription = $date_inscription;
        $inscription->eleve_id = $eleve_id;
        $inscription->cycle_id = $cycle_id;
        $inscription->niveau_id = $niveau_id;
        $inscription->last_niveau_id = $last_niveau_id;
        $inscription->classe_id = $classe_id;
        $inscription->espace_id = $espace_id;
        $inscription->type_inscription = $type_inscription;
        $inscription->statut = $statut;
        $inscription->annee_id = $annee_id;
        
        $inscription->programme_provenance = $programme_provenance;
        
        $inscription->adresse_map = $adresse_map;
        $inscription->quartier_id = $quartier_id;




        $inscription->created_at = Carbon::now();

        $inscription->save();

        return $inscription;
    }

    /**
     * Affichage d'une année scolaire
     * @param int $id
     * @return  Inscription
     */

    public static function rechercheInscriptionById($id)
    {

        return   $inscription = Inscription::findOrFail($id);
    }

    /**
     * Update d'une Inscription scolaire
     *
     *
     *

     
     * @param  date $date_inscription
     * @param  int $eleve_id
     * @param  int $cycle_id
     * @param  int $niveau_id
     * @param  int $last_niveau_id
     * @param  int $classe_id
     * @param  int $espace_id
     * @param  int $type_inscription
     * @param  int $statut
     * @param  int $annee_id
    
     * @param  int $programme_provenance
     
     * @param  int $adresse_map


       * @param  int $quartier_id


     *
     *
 * @param int $id
     * @return  Inscription
     */

    public static function updateInscription(

        $date_inscription,
        $eleve_id,
        $cycle_id,
        $niveau_id,
        $last_niveau_id,
        $classe_id,
        $espace_id,
        $type_inscription,
        $statut,
        $annee_id,
       
        $programme_provenance,
        
        $adresse_map,
        $quartier_id







        $id)
    {


        return   $inscription = Inscription::findOrFail($id)->update([


            'date_inscription' => $date_inscription,
            'eleve_id' => $eleve_id,
            'cycle_id' => $cycle_id,
            'niveau_id' => $niveau_id,
            'last_niveau_id' => $last_niveau_id,
            'classe_id' => $classe_id,
            'espace_id' => $espace_id,
            'type_inscription' => $type_inscription,
            'statut' => $statut,
            'annee_id' => $annee_id,
           
            'programme_provenance' => $programme_provenance,
           
            'adresse_map' => $adresse_map,
            'quartier_id' => $quartier_id,


            'id' => $id,


        ]);
    }









    /**
     * Supprimer une Inscription
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteInscription($id)
    {

        $inscription = Inscription::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($inscription) {
            return 1;
        }
        return 0;
    }










     /**
     * Retourne la liste des inscriptions
     *
     *
     * @param  int $annee_id
     * @param  int $eleve_id
     * @param  int $cycle_id
     * @param  int $niveau_id
     * @param  int $classe_id
     * @param  int $espace_id
     * @param  int $type_inscription
     * @param  int $statut
     * @param  int $programme_provenance
     * @param  int $quartier_id
    


     *
     * @return  array
     */

     public static function getListe(


        $annee_id = null,
        $eleve_id = null,
        $cycle_id = null,
        $niveau_id = null,
        $classe_id = null,
        $espace_id = null,
        $type_inscription = null,
        $statut = null,
     
        $programme_provenance = null,
        $quartier_id = null,
      

    ) {



        $query =   Inscription::
      
            ->where('inscriptions.etat', '!=', TypeStatus::SUPPRIME)
            ->where('inscriptions.annee_id', '=', $annee_id)
          






        if ($eleve_id != null) {

            $query->where('eleve_id', '=', $eleve_id);
        }

        if ($cycle_id != null) {

            $query->where('cycle_id', '=', $cycle_id);
        }

        if ($niveau_id != null) {

            $query->where('niveau_id', '=', $niveau_id);
        }

        if ($classe_id != null) {

            $query->where('classe_id', '=', $classe_id);
        }

        if ($espace_id != null) {

            $query->where('inscriptions.espace_id', '=', $espace_id);
        }

        if ($type_inscription != null) {

            $query->where('type_inscription', '=', $type_inscription);
        }

        if ($statut != null) {

            $query->where('statut', '=', $statut);
        }

         


          if ($programme_provenance != null) {

             $query->where('programme_provenance', '=', $programme_provenance);
         }



         if ($quartier_id != null) {

             $query->where('quartier_id', '=', $quartier_id);
         }

        




        return    $query->get();
    }



    /**
     * Retourne le nombre  des  inscriptions
     * 
     * 
  * @param  int $annee_id
     * @param  int $eleve_id
     * @param  int $cycle_id
     * @param  int $niveau_id
     * @param  int $classe_id
     * @param  int $espace_id
     * @param  int $type_inscription
     * @param  int $statut
     * @param  int $programme_provenance
     * @param  int $quartier_id
    
    
     *

 * @return  int $total
     */

    public static function getTotal(


        
        $annee_id = null,
        $eleve_id = null,
        $cycle_id = null,
        $niveau_id = null,
        $classe_id = null,
        $espace_id = null,
        $type_inscription = null,
        $statut = null,
     
        $programme_provenance = null,
        $quartier_id = null



    ) {

        $query =   Inscription::
        
            ->where('inscriptions.etat', '!=', TypeStatus::SUPPRIME)
            ->where('inscriptions.annee_id', '=', $annee_id)
          



           if ($eleve_id != null) {

            $query->where('eleve_id', '=', $eleve_id);
        }

        if ($cycle_id != null) {

            $query->where('cycle_id', '=', $cycle_id);
        }

        if ($niveau_id != null) {

            $query->where('niveau_id', '=', $niveau_id);
        }

        if ($classe_id != null) {

            $query->where('classe_id', '=', $classe_id);
        }

        if ($espace_id != null) {

            $query->where('inscriptions.espace_id', '=', $espace_id);
        }

        if ($type_inscription != null) {

            $query->where('type_inscription', '=', $type_inscription);
        }

        if ($statut != null) {

            $query->where('statut', '=', $statut);
        }




        $total = $query->count();

        if ($total) {

            return   $total;
        }

        return 0;
    }


    /**
     * Obtenir un eleve
     *
     */
    public function eleve()
    {


        return $this->belongsTo(Eleve::class, 'eleve_id');
    }


    /**
     * Obtenir un cycle
     *
     */
    public function cycle()
    {


        return $this->belongsTo(Cycle::class, 'cycle_id');
    }


    /**
     * Obtenir un niveau
     *
     */
    public function niveau()
    {


        return $this->belongsTo(Niveau::class, 'niveau_id');
    }


    /**
     * Obtenir le niveau  anterieur
     *
     */
    public function last_niveau()
    {


        return $this->belongsTo(Niveau::class, 'last_niveau_id');
    }



    /**
     * Obtenir une classe
     *
     */
    public function classe()
    {


        return $this->belongsTo(Classe::class, 'classe_id');
    }


    /**
     * Obtenir un espace
     *
     */
    public function espace()
    {


        return $this->belongsTo(Espace::class, 'espace_id');
    }


    






}
