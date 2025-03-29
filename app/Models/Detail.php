<?php

namespace App\Models;

use App\Types\TypeStatus;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Detail extends Model
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


        'montant',
        'libelle',
        'paiement_id',
        'type_frais_id',
        'inscription_id',
       



        'etat',

    ];



    /**
     * Ajouter une Detail
     *

     * @param  int $montant
     * @param  string $libelle
     * @param  int $paiement_id
     * @param  int $type_frais_id
     * @param  int $inscription_id
    
 * @return Detail
     */

    public static function addDetail(
        $montant,
        $libelle,
        $paiement_id,
        $type_frais_id,
        $inscription_id,
       



    )
    {
        $detail = new Detail();


        $detail->montant = $montant;
        $detail->libelle = $libelle;
        $detail->paiement_id = $paiement_id;
        $detail->type_frais_id = $type_frais_id;
        $detail->inscription_id = $inscription_id;
       


        $detail->created_at = Carbon::now();

        $detail->save();

        return $detail;
    }

    /**
     * Affichage d'une année scolaire
     * @param int $id
     * @return  Detail
     */

    public static function rechercheDetailById($id)
    {

        return   $detail= Detail::findOrFail($id);
    }

    /**
     * Update d'une Detail scolaire
 * @param  int $montant
     * @param  string $libelle
     * @param  int $paiement_id
     * @param  int $type_frais_id
     * @param  int $inscription_id
    
     *
     *
 * @param int $id
     * @return  Detail
     */

    public static function updateDetail(
         $montant,
        $libelle,
        $paiement_id,
        $type_frais_id,
        $inscription_id,
        


        $id)
    {


        return   $detail= Detail::findOrFail($id)->update([



            'montant' => $montant,
            'libelle' => $libelle,
            'paiement_id' => $paiement_id,
            'type_frais_id' => $type_frais_id,
            

            'id' => $id,


        ]);
    }




    /**
     * Supprimer une Detail
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteDetail($id)
    {

        $detail= Detail::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($detail) {
            return 1;
        }
        return 0;
    }



    /**
     * Retourne la liste des Details

     * @param  int $paiement_id
     * @param  int $type_frais_id
     * @param  int $inscription_id
    


     *
     * @return  array
     */

    public static function getListe(

        $paiement_id = null,
        $type_frais_id = null,
        $inscription_id = null,
       


    ) {



        $query =  Detail::where('etat', '!=', TypeStatus::SUPPRIME)
        ;

        if ($paiement_id != null) {

            $query->where('paiement_id', '=', $paiement_id);
        }

         if ($type_frais_id != null) {

            $query->where('type_frais_id', '=', $type_frais_id);
        }

         if ($inscription_id != null) {

            $query->where('inscription_id', '=', $inscription_id);
        }

        





        return    $query->get();
    }



    /**
     * Retourne le nombre  des  activités
 * @param  int $paiement_id
     * @param  int $type_frais_id
     * @param  int $inscription_id
    

     *
 * @return  int $total
     */

    public static function getTotal(
         $paiement_id = null,
        $type_frais_id = null,
        $inscription_id = null,
       



    ) {

        $query =   DB::table('details')


            ->where('details.etat', '!=', TypeStatus::SUPPRIME);


       if ($paiement_id != null) {

            $query->where('paiement_id', '=', $paiement_id);
        }

         if ($type_frais_id != null) {

            $query->where('type_frais_id', '=', $type_frais_id);
        }

         if ($inscription_id != null) {

            $query->where('inscription_id', '=', $inscription_id);
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
    public function inscription()
    {


        return $this->belongsTo(Inscription::class, 'inscription_id');
    }




    



     

     /**
     * Obtenir un utilisateur
     *
     */
    public function paiement()
    {


        return $this->belongsTo(Paiement::class, 'paiement_id');
    }





     /**
     * Obtenir un type de frais 
     *
     */
    public function typefrais()
    {


        return $this->belongsTo(TypeFrais::class, 'type_frais_id');
    }




   






}
