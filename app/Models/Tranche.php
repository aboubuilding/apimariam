<?php

namespace App\Models;

use App\Types\TypeStatus;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Tranche extends Model
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
        'date_butoire',
       
        'type_service_id',
        'taux',




        'etat',

    ];



    /**
     * Ajouter une Tranche
     *

     * @param  date $libelle
     * @param  float $date_butoire
     * @param  int $frais_ecole_id
     * @param  int $type_service_id
     * @param  int $taux




     * @return Tranche
     */

    public static function addTranche (

        $libelle,
        $date_butoire,
     
        $type_service_id,
        $taux




    )
    {
        $tranche = new Tranche();


        $tranche->libelle = $libelle;
        $tranche->date_butoire = $date_butoire;
       
        $tranche->type_service_id = $type_service_id;
        $tranche->taux = $taux;



        $tranche->created_at = Carbon::now();

        $tranche->save();

        return $tranche;
    }

    /**
     * Affichage d'une année scolaire
     * @param int $id
     * @return  Tranche
     */

    public static function rechercheTrancheById($id)
    {

        return   $tranche= Tranche::findOrFail($id);
    }

    /**
     * Update d'une Tranche scolaire

     ** @param date $libelle
     * * @param float $date_butoire
    
     * * @param int $type_service_id
     * * @param int $taux

     *
     *
     * @param int $id
     * @return  Tranche
     */

    public static function updateTranche(
        $libelle,
        $date_butoire,
        $frais_ecole_id,
        $type_service_id,
        $taux,



        $id)
    {


        return   $tranche= Tranche::findOrFail($id)->update([



            'libelle' => $libelle,
            'date_butoire' => $date_butoire,
      
            'type_service_id' => $type_service_id,
            'taux' => $taux,



            'id' => $id,


        ]);
    }




    /**
     * Supprimer une Tranche
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteTranche($id)
    {

        $tranche= Tranche::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($tranche) {
            return 1;
        }
        return 0;
    }



    /**
     * Retourne la liste des Tranches


     * @param  int $type_service_id




     *
     * @return  array
     */

    public static function getListe(


     
        $type_service_id = null


    ) {



        $query =  Tranche::where('etat', '!=', TypeStatus::SUPPRIME)
        ;







          if ($type_service_id != null) {

            $query->where('type_service_id', '=', $type_service_id);
        }



        return    $query->get();
    }



    /**
     * Retourne le nombre  des  activités

     *
     *

     * * @param int $type_service_id


     *
     *
     * @return  int $total
     */

    public static function getTotal(

        $type_service_id = null




    ) {

        $query =   DB::table('Tranches')


            ->where('Tranches.etat', '!=', TypeStatus::SUPPRIME);




        if ($type_service_id != null) {

            $query->where('type_service_id', '=', $type_service_id);
        }



        $total = $query->count();

        if ($total) {

            return   $total;
        }

        return 0;
    }



    /**
     * Obtenir un type de service 
     *
     */
    public function typeservice()
    {


        return $this->belongsTo(\FraisEcole::class, 'type_service_id');
    }










}
