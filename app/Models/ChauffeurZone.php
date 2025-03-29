<?php

namespace App\Models;

use App\Types\TypeStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChauffeurZone extends Model
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


        'chauffeur_id',
        'zone_id',
        'date_prise_service',

        'date_arret_service',
        'statut',
        'annee_id',


        'etat',

    ];

      /**
     * Ajouter un ChauffeurZone


     * @param  int $chauffeur_id
     * @param  int $zone_id
     * @param  date $date_prise_service
     * @param  date $date_arret_service
     * @param  int $statut
     * @param  int $annee_id
  


     * @return ChauffeurZone
     */

     public static function addChauffeurZone(
        $chauffeur_id,
        $zone_id,
        $date_prise_service,
        $date_arret_service,
        $statut,
        $annee_id
      
        

    )
    {
        $chauffeurzone = new ChauffeurZone();


        $chauffeurzone->chauffeur_id = $chauffeur_id;
        $chauffeurzone->zone_id = $zone_id;
        $chauffeurzone->date_prise_service = $date_prise_service;
        $chauffeurzone->date_arret_service = $date_arret_service;
        $chauffeurzone->statut = $statut;
        $chauffeurzone->annee_id = $annee_id;
      

        $chauffeurzone->created_at = Carbon::now();

        $chauffeurzone->save();

        return $chauffeurzone;
    }

    /**
     * Affichage d'un ChauffeurZone
     * @param int $id
     * @return  ChauffeurZone
     */

    public static function rechercheChauffeurZoneById($id)
    {

        return   $chauffeurzone = ChauffeurZone::findOrFail($id);
    }



    /**
     * Update d'un ChauffeurZone

     * @param  int $chauffeur_id
     * @param  int $zone_id
     * @param  date $date_prise_service
     * @param  date $date_arret_service
     * @param  int $statut
     * @param  int $annee_id



     * @param int $id
     * @return  ChauffeurZone
     */

    public static function updateChauffeurZone(
        $chauffeur_id,
        $zone_id,
        $date_prise_service,
        $date_arret_service,
        $statut,
        $annee_id
        ,


        $id)
    {


        return   $chauffeurzone = ChauffeurZone::findOrFail($id)->update([



            'chauffeur_id' => $chauffeur_id,
            'zone_id' => $zone_id,
            'date_prise_service' => $date_prise_service,
            'date_arret_service' => $date_arret_service,
            'statut' => $statut,
            'annee_id' => $annee_id,

            'id' => $id,


        ]);
    }




    /**
     * Supprimer une ChauffeurZone
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteChauffeurZone($id)
    {

        $chauffeurzone = ChauffeurZone::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($chauffeurzone) {
            return 1;
        }
        return 0;
    }



    /**
     * Retourne la liste des ChauffeurZone
     * 
     * 
     * 
     * @param  int $chauffeur_id
     * @param  int $zone_id
     * @param  int $statut
     * @param  int $annee_id

     *
     * @return  array
     */

    public static function getListe(

        $chauffeur_id = null,

        $zone_id = null,
        $statut = null,
        $annee_id = null

    ) {



        $query =  ChauffeurZone::where('etat', '!=', TypeStatus::SUPPRIME)
        ;

        if ($chauffeur_id != null) {

            $query->where('chauffeur_id', '=', $chauffeur_id);
        }

        if ($zone_id != null) {

            $query->where('zone_id', '=', $zone_id);
        }


         if ($statut != null) {

            $query->where('statut', '=', $statut);
        }


         if ($annee_id != null) {

            $query->where('annee_id', '=', $annee_id);
        }




        return    $query->get();
    }



    /**
     * Retourne le nombre  des  activités


   * @param  int $annee_id
     * @param  int $sexe
     * @param  int $type_permis



     * @return  int $total
     */

    public static function getTotal(
        $annee_id = null,
        $type_permis = null,
        $annee_id = null




    ) {

        $query =   DB::table('ChauffeurZones')


            ->where('ChauffeurZones.etat', '!=', TypeStatus::SUPPRIME);


        if ($type_permis != null) {

            $query->where('ChauffeurZones.type_permis', '=', $type_permis);
        }


        if ($annee_id != null) {

            $query->where('ChauffeurZones.annee_id', '=', $annee_id);
        }


         if ($sexe != null) {

            $query->where('ChauffeurZones.sexe', '=', $sexe);
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
