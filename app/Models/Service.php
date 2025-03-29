<?php

namespace App\Models;

use App\Types\TypeStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
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
        'montant',
        'annee_id',

        'type_service_id',
       


        'etat',

    ];

      /**
     * Ajouter un Service


     * @param  string $libelle
     * @param  string $montant

    
     * @param  int $type_service_id

     * @param  int $annee_id



     * @return Service
     */

     public static function addService(
        $libelle,
        $montant,

        $type_service_id,
        $annee_id
        

    )
    {
        $service = new Service();


        $service->libelle = $libelle;
        $service->montant = $montant;


        $service->type_service_id = $type_service_id;
        $service->annee_id = $annee_id;


        $service->created_at = Carbon::now();

        $service->save();

        return $service;
    }

    /**
     * Affichage d'un Service
     * @param int $id
     * @return  Service
     */

    public static function rechercheServiceById($id)
    {

        return   $service = Service::findOrFail($id);
    }

    /**
     * Update d'un Service

    * @param  string $libelle
     * @param  string $montant


     * @param  int $type_service_id

     * @param  int $annee_id




     * @param int $id
     * @return  Service
     */

    public static function updateService(
        $libelle,
        $montant,

        $annee_id,
        $inscription,


        $id)
    {


        return   $service = Service::findOrFail($id)->update([



            'libelle' => $libelle,
            'montant' => $montant,

   
            'annee_id' => $annee_id,
            'type_service_id' => $type_service_id,

            'id' => $id,


        ]);
    }




    /**
     * Supprimer une Service
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteService($id)
    {

        $service = Service::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($activite) {
            return 1;
        }
        return 0;
    }



    /**
     * Retourne la liste des Service
     * @param  int $annee_id
     * @param  int $type_service_id

     *
     * @return  array
     */

    public static function getListe(

        $annee_id = null,

        $type_service_id = null

    ) {



        $query =  Service::where('etat', '!=', TypeStatus::SUPPRIME)
        ;

        if ($annee_id != null) {

            $query->where('annee_id', '=', $annee_id);
        }

        if ($type_service_id != null) {

            $query->where('type_service_id', '=', $type_service_id);
        }




        return    $query->get();
    }



    /**
     * Retourne le nombre  des  activités


    * @param  int $annee_id
     * @param  int $type_service_id


     * @return  int $total
     */

    public static function getTotal(
        $annee_id = null,
        $type_service_id = null




    ) {

        $query =   DB::table('Service')


            ->where('services.etat', '!=', TypeStatus::SUPPRIME);


        if ($type_service_id != null) {

            $query->where('services.type_service_id', '=', $type_service_id);
        }


        if ($annee_id != null) {

            $query->where('services.annee_id', '=', $annee_id);
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
     * Obtenir une inscription
     *
     */
    public function typeservice()
    {


        return $this->belongsTo(TypeService::class, 'type_service_id');
    }
}
