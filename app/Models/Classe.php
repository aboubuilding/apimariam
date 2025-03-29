<?php

namespace App\Models;

use App\Types\TypeStatus;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Classe extends Model
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


        'libelle',
        'emplacement_id',
        'cycle_id',
        'niveau_id',
        'annee_id',
        

        'etat',

    ];



    /**
     * Ajouter une Classe
     *

     * @param  string $libelle
     * @param  int $emplacement_id
     * @param  int $cycle_id
     * @param  int $niveau_id
     * @param  int $annee_id
    



     * @return Classe
     */

    public static function addClasse(
        $libelle,
        $emplacement_id,
        $cycle_id,
        $niveau_id,
        $annee_id
       

    )
    {
        $classe= new Classe();


        $classe->libelle = $libelle;
        $classe->emplacement_id = $emplacement_id;
        $classe->cycle_id = $cycle_id;
        $classe->niveau_id = $niveau_id;
        $classe->annee_id = $annee_id;
       
        $classe->created_at = Carbon::now();

        $classe->save();

        return $classe;
    }

    /**
     * Affichage d'une année scolaire
     * @param int $id
     * @return  Classe
     */

    public static function rechercheClasseById($id)
    {

        return   $classe= Classe::findOrFail($id);
    }

    /**
     * Update d'une Classe scolaire

      * @param  string $libelle
     * @param  int $emplacement_id
     * @param  int $cycle_id
     * @param  int $niveau_id
     * @param  int $annee_id
    

     * @param int $id
     * @return  Classe
     */

    public static function updateClasse(
        $libelle,
        $emplacement_id,
        $cycle_id,
        $niveau_id,
        $annee_id,
       
       
        $id)
    {


        return   $classe= Classe::findOrFail($id)->update([



            'libelle' => $libelle,
            'emplacement_id' => $emplacement_id,
            'cycle_id' => $cycle_id,
            'niveau_id' => $niveau_id,
            'annee_id' => $annee_id,
           
           
            'id' => $id,


        ]);
    }




    /**
     * Supprimer une Classe
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteClasse($id)
    {

        $classe= Classe::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($classe) {
            return 1;
        }
        return 0;
    }



    /**
     * Retourne la liste des Classes

     * @param  int $cycle_id
     * @param  int $niveau_id
     * @param  int $annee_id
    * @param  int $emplacement_id
 


     *
     * @return  array
     */

    public static function getListe(

        $cycle_id = null,
        $niveau_id = null,
        $annee_id = null,
        $emplacement_id = null
      
        


    ) {

      

        $query =  Classe::where('etat', '!=', TypeStatus::SUPPRIME)
        ;

        if ($cycle_id != null) {

            $query->where('cycle_id', '=', $cycle_id);
        }

         if ($niveau_id != null) {

            $query->where('niveau_id', '=', $niveau_id);
        }

         if ($annee_id != null) {

            $query->where('annee_id', '=', $annee_id);
        }


         if ($emplacement_id != null) {

            $query->where('emplacement_id', '=', $emplacement_id);
        }

        
       

       


        return    $query->get();
    }



    /**
     * Retourne le nombre  des  activités 


    * @param  int $cycle_id
     * @param  int $niveau_id
     * @param  int $annee_id
    * @param  int $emplacement_id


    

     * @return  int $total
     */

    public static function getTotal(
          $cycle_id = null,
        $niveau_id = null,
        $annee_id = null,
        $emplacement_id = null
       


    ) {

        $query =   DB::table('classes')


            ->where('classes.etat', '!=', TypeStatus::SUPPRIME);


       if ($cycle_id != null) {

            $query->where('cycle_id', '=', $cycle_id);
        }

         if ($niveau_id != null) {

            $query->where('niveau_id', '=', $niveau_id);
        }

         if ($annee_id != null) {

            $query->where('annee_id', '=', $annee_id);
        }


        if ($emplacement_id != null) {

            $query->where('emplacement_id', '=', $emplacement_id);
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
    public function niveau()
    {


        return $this->belongsTo(Niveau::class, 'niveau_id');
    }



     /**
     * Obtenir un utilisateur
     *
     */
    public function cycle()
    {


        return $this->belongsTo(Cycle::class, 'cycle_id');
    }



    /**
     * Obtenir un emplacement
     *
     */
    public function emplacement()
    {


        return $this->belongsTo(Emplacement::class, 'emplacement_id');
    }




  

}
