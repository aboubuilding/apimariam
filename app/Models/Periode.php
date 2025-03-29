<?php

namespace App\Models;

use App\Types\TypeStatus;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Periode extends Model
{
    use HasFactory;




    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->etat = TypeStatus::ACTIF;
    
    }

    protected $table = 'periodes';

    protected $fillable = [
        'libelle',
        'date_debut',
        'date_fin',
        'annee_id',
        'statut',
        'etat',
    ];





    /**
     * Ajouter une Periode
     *

     * @param  string  $libelle
     * @param  date $date_debut
     * @param  date  $date_fin
     * @param  int $annee_id
     * @param  int $statut
  



     * @return Periode
     */

    public static function addPeriode(
        $libelle,
        $date_debut,
        $date_fin,
        $annee_id,
        $statut
      


    )
    {
        $periode = new Periode();


        $periode->libelle = $libelle;
        $periode->date_debut = $date_debut;
        $periode->date_fin = $date_fin;
        $periode->annee_id = $annee_id;
      


        $periode->created_at = Carbon::now();

        $periode->save();

        return $periode;
    }

    /**
     * Affichage d'une activité scolaire
     * @param int $id
     * @return  Periode
     */

    public static function recherchePeriodeById($id)
    {

        return   $periode = Periode::findOrFail($id);
    }

    /**
     * Update d'une Periode scolaire

    * @param  string  $libelle
     * @param  date $date_debut
     * @param  date  $date_fin
     * @param  int $annee_id
     * @param  int $statut



     * @param int $id
     * @return  Periode
     */

    public static function updatePeriode(
         $libelle,
        $date_debut,
        $date_fin,
        $annee_id,
        $statut,

        $id)
    {


        return   $periode = Periode::findOrFail($id)->update([



            'libelle' => $libelle,
            'date_debut' => $date_debut,
            'date_fin' => $date_fin,
            'annee_id' => $annee_id,
            'statut' => $statut,
           

            'id' => $id,


        ]);
    }




    /**
     * Supprimer une Periode
     *
     * @param int $id
     * @return  boolean
     */

    public static function deletePeriode($id)
    {

        $periode = Periode::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($periode) {
            return 1;
        }
        return 0;
    }



    /**
     * Retourne la liste des Periodes
   
    
     * @param  int $annee_id

     *
     * @return  array
     */

    public static function getListe(

       
        $annee_id = null

    ) {



        $query =  Periode::where('etat', '!=', TypeStatus::SUPPRIME)
        ;

       

        if ($annee_id != null) {

            $query->where('annee_id', '=', $annee_id);
        }




        return    $query->get();
    }



    /**
     * Retourne le nombre  des  activités


     * @param  int $annee_id

     * @return  int $total
     */

    public static function getTotal(
        
        $annee_id = null




    ) {

        $query =   DB::table('Periodes')


            ->where('Periodes.etat', '!=', TypeStatus::SUPPRIME);


           


            if ($annee_id != null) {

                $query->where('annee_id', '=', $annee_id);
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


    


}
