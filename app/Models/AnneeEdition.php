<?php

namespace App\Models;

use App\Types\TypeStatus;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AnneeEdition extends Model
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



        'etat',

    ];



    /**
     * Ajouter une AnneEdition
     *

     * @param  string $libelle



     * @return AnneeEdition
     */

    public static function addAnneEdition(
        $libelle


    )
    {
        $anneedition = new AnneEdition();


        $anneedition->libelle = $libelle;


        $anneedition->created_at = Carbon::now();

        $anneedition->save();

        return $anneedition;
    }

    /**
     * Affichage d'une année scolaire
     * @param int $id
     * @return  AnneeEdition
     */

    public static function rechercheAnneEditionById($id)
    {

        return   $anneedition = AnneeEdition::findOrFail($id);
    }

    /**
     * Update d'une AnneEdition scolaire

     * @param  string $libelle






     * @param int $id
     * @return  AnneeEdition
     */

    public static function updateAnneEdition(
        $libelle,

        $id)
    {


        return   $anneedition = AnneeEdition::findOrFail($id)->update([



            'libelle' => $libelle,


            'id' => $id,


        ]);
    }




    /**
     * Supprimer une AnneEdition
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteAnneeEdition($id)
    {

        $anneedition = AnneeEdition::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($anneedition) {
            return 1;
        }
        return 0;
    }



    /**
     * Retourne la liste des AnneEditions

     * @param  int $statut_AnneEdition

     *
     * @return  array
     */

    public static function getListe(

        $statut_AnneeEdition = null



    ) {



        $query =  AnneeEdition::where('etat', '!=', TypeStatus::SUPPRIME)
        ;





        return    $query->get();
    }



    /**
     * Retourne le nombre  des  activités





     * @return  int $total
     */

    public static function getTotal(




    ) {

        $query =   DB::table('annee_editions')


            ->where('annee_editions.etat', '!=', TypeStatus::SUPPRIME);






        $total = $query->count();

        if ($total) {

            return   $total;
        }

        return 0;
    }








}
