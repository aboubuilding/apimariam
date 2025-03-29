<?php

namespace App\Models;

use App\Types\TypeStatus;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Zone extends Model
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
        'description',
        'annee_id',
       



        'etat',

    ];



    /**
     * Ajouter une Zone
     *

     * @param  date $libelle
     * @param  int $description
     * @param  int $annee_id
    




     * @return Zone
     */

    public static function addZone (

        $libelle,
        $description,
        $annee_id,
       


    )
    {
        $zone = new Zone();


        $zone->libelle = $libelle;
        $zone->description = $description;
        $zone->annee_id = $annee_id;
      



        $zone->created_at = Carbon::now();

        $zone->save();

        return $zone;
    }

    /**
     * Affichage d'une année scolaire
     * @param int $id
     * @return  Zone
     */

    public static function rechercheZoneById($id)
    {

        return   $zone= Zone::findOrFail($id);
    }

    /**
     * Update d'une Zone scolaire
     *
     *
     *
 * @param date $libelle
     * * @param int $description
     * * @param int $annee_id
     

 *
     *
     * @param int $id
     * @return  Zone
     */

    public static function updateZone(
        $libelle,
        $description,
        $annee_id,
       




        $id)
    {


        return   $zone= Zone::findOrFail($id)->update([



            'libelle' => $libelle,
            'description' => $description,
            'annee_id' => $annee_id,
            


            'id' => $id,


        ]);
    }




    /**
     * Supprimer une Zone
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteZone($id)
    {

        $zone= Zone::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($zone) {
            return 1;
        }
        return 0;
    }



    /**
     * Retourne la liste des Zones


     * @param  int $annee_id
   




     *
     * @return  array
     */

    public static function getListe(


        $annee_id = null,
       



    ) {



        $query =  Zone::where('etat', '!=', TypeStatus::SUPPRIME)
        ;




        if ($annee_id != null) {

            $query->where('annee_id', '=', $annee_id);
        }

        






        return    $query->get();
    }



    /**
     * Retourne le nombre  des  activités
 *
     *

     * @param int $annee_id
    

     *
     * @return  int $total
     */

    public static function getTotal(

        $annee_id = null
       





    ) {

        $query =   DB::table('zones')


            ->where('zones.etat', '!=', TypeStatus::SUPPRIME);




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
