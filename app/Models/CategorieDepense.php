<?php

namespace App\Models;
use App\Types\TypeStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieDepense extends Model
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



     * @return CategorieDepense
     */

    public static function addCategorieDepense(
        $libelle


    )

    {
        $categoriedepense = new CategorieDepense();


        $categoriedepense->libelle = $libelle;

        $categoriedepense->created_at = Carbon::now();

        $categoriedepense->save();

        return $categoriedepense;
    }

    /**
     * Affichage d'une activité scolaire
     * @param int $id
     * @return  CategorieDepense
     */

    public static function rechercheCategorieDepenseById($id)
    {

        return   $categoriedepense = CategorieDepense::findOrFail($id);
    }

    /**
     * Update d'une Activite scolaire

     * @param  string $libelle




     * @param int $id
     * @return  CategorieDepense
     */

    public static function updateCategorieDepense(
        $libelle,

        $id)
    {


        return   $categoriedepense = CategorieDepense::findOrFail($id)->update([



            'libelle' => $libelle,


            'id' => $id,


        ]);
    }




    /**
     * Supprimer un CategorieDepense
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteCategorieDepense($id)
    {

        $categoriedepense = CategorieDepense::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($categoriedepense) {
            return 1;
        }
        return 0;
    }



    /**
     * Retourne la liste des CategorieDepense
    

     *
     * @return  array
     */

    public static function getListe(

        $libelle = null

    ) {

        $query =  CategorieDepense::where('etat', '!=', TypeStatus::SUPPRIME)
        ;

       
        return    $query->get();
    }



    /**
     * Retourne le nombre  des  activités


  

     * @return  int $total
     */

    public static function getTotal(
      


    ) {

        $query =   DB::table('CategorieDepense')


            ->where('CategorieDepenses.etat', '!=', TypeStatus::SUPPRIME);


        






        $total = $query->count();

        if ($total) {

            return   $total;
        }

        return 0;
    }





}


