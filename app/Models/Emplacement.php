<?php

namespace App\Models;
use App\Types\TypeStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emplacement extends Model
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
     * Ajouter une Activite
     *

     * @param  string $libelle



     * @return Emplacement
     */

    public static function addEmplacement(
        $libelle


    )

    {
        $emplacement = new Emplacement();


        $emplacement->libelle = $libelle;

        $emplacement->created_at = Carbon::now();

        $emplacement->save();

        return $emplacement;
    }

    /**
     * Affichage d'une activité scolaire
     * @param int $id
     * @return  Emplacement
     */

    public static function rechercheEmplacementById($id)
    {

        return   $emplacement = Emplacement::findOrFail($id);
    }

    /**
     * Update d'une Activite scolaire

     * @param  string $libelle




     * @param int $id
     * @return  Emplacement
     */

    public static function updateEmplacement(
        $libelle,

        $id)
    {


        return   $emplacement = Emplacement::findOrFail($id)->update([



            'libelle' => $libelle,


            'id' => $id,


        ]);
    }




    /**
     * Supprimer un Emplacement
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteEmplacement($id)
    {

        $emplacement = Emplacement::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($emplacement) {
            return 1;
        }
        return 0;
    }



    /**
     * Retourne la liste des Emplacement
     * @param  int $annee_id
     * @param  int $niveau_id

     *
     * @return  array
     */

    public static function getListe(

        $libelle = null

    ) {

        $query =  Emplacement::where('etat', '!=', TypeStatus::SUPPRIME)
        ;

        if ($libelle != null) {

            $query->where('libelle', '=', $libelle);
        }
        return    $query->get();
    }



    /**
     * Retourne le nombre  des  activités


    * @param  int $annee_id
     * @param  int $niveau_id


     * @return  int $total
     */

    public static function getTotal(
        $libelle = null,


    ) {

        $query =   DB::table('Emplacement')


            ->where('Emplacements.etat', '!=', TypeStatus::SUPPRIME);


        if ($libelle != null) {

            $query->where('Emplacements.libelle', '=', $libelle);
        }






        $total = $query->count();

        if ($total) {

            return   $total;
        }

        return 0;
    }





}


