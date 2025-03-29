<?php

namespace App\Models;

use App\Types\TypeStatus;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DetailAchat extends Model
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


        'achat_id',
        'produit_id',
      
        'quantite',
        'prix_unitaire',
      




        'etat',

    ];



    /**
     * Ajouter une DetailAchat
     *

     * @param  int  $achat_id
     * @param  int $produit_id
   
     * @param  int $quantite
     * @param  int $prix_unitaire
   


     * @return DetailAchat
     */

    public static function addDetailAchat(
        $achat_id,
        $produit_id,
       
        $quantite,
        $prix_unitaire
      



    )
    {
       $detailachat = new DetailAchat();


       $detailachat->achat_id = $achat_id;
       $detailachat->produit_id = $produit_id;
     
       $detailachat->quantite = $quantite;
       $detailachat->prix_unitaire = $prix_unitaire;
   

       $detailachat->created_at = Carbon::now();

       $detailachat->save();

        return$detailachat;
    }

    /**
     * Affichage d'une année scolaire
     * @param int $id
     * @return  DetailAchat
     */

    public static function rechercheDetailAchatById($id)
    {

        return  $detailachat= DetailAchat::findOrFail($id);
    }

    /**
     * Update d'une DetailAchat scolaire

      * @param  int  $achat_id
     * @param  int $produit_id
    
     * @param  int $quantite
     * @param  int $prix_unitaire
    



     * @param int $id
     * @return  DetailAchat
     */

    public static function updateDetailAchat(
        $achat_id,
        $produit_id,
      
        $quantite,
        $prix_unitaire,
      


        $id)
    {


        return  $detailachat= DetailAchat::findOrFail($id)->update([



            'achat_id' => $achat_id,
            'produit_id' => $produit_id,
         
            'quantite' => $quantite,
            'prix_unitaire' => $prix_unitaire,
           



            'id' => $id,


        ]);
    }




    /**
     * Supprimer une DetailAchat
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteDetailAchat($id)
    {

       $detailachat= DetailAchat::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($detailachat) {
            return 1;
        }
        return 0;
    }



    /**
     * Retourne la liste des DetailAchats

     * @param  int $achat_id
     * @param  int $produit_id




     *
     * @return  array
     */

    public static function getListe(

       
        $achat_id = null,
        $produit_id = null



    ) {



        $query =  DetailAchat::where('etat', '!=', TypeStatus::SUPPRIME)
        ;

       




         if ($achat_id != null) {

            $query->where('achat_id', '=', $achat_id);
        }


        if ($produit_id != null) {

            $query->where('produit_id', '=', $produit_id);
        }




        return    $query->get();
    }



    /**
     * Retourne le nombre  des  activités


     * @param  int $bon_id
     * @param  int $produit_id


     * @return  int $total
     */

    public static function getTotal(


       
        $achat_id = null,
        $produit_id = null



    ) {

        $query =   DB::table('detail_bons')


            ->where('detail_bons.etat', '!=', TypeStatus::SUPPRIME);


       



         if ($achat_id != null) {

            $query->where('achat_id', '=', $achat_id);
        }


        if ($produit_id != null) {

            $query->where('produit_id', '=', $produit_id);
        }




        $total = $query->count();

        if ($total) {

            return   $total;
        }

        return 0;
    }





    /**
     * Retourne le nombre  des  activités


     
     * @param  int $achat_id
     * @param  int $produit_id


     * @return  int $total
     */

     public static function getMontantTotal(


       
        $achat_id = null,
        $produit_id = null



    ) {

        $query =   DB::table('detail_achats')


            ->where('detail_achats.etat', '!=', TypeStatus::SUPPRIME);


       




         if ($achat_id != null) {

            $query->where('achat_id', '=', $achat_id);
        }


        if ($produit_id != null) {

            $query->where('produit_id', '=', $produit_id);
        }




        $total = $query->SUM('detail_achats.montant_achat');

        if ($total) {

            return   $total;
        }

        return 0;
    }








     /**
     * Obtenir un produit
     *
     */
    public function produit()
    {


        return $this->belongsTo(Produit::class, 'produit_id');
    }







     /**
     * Obtenir un bon
     *
     */
    public function achat()
    {


        return $this->belongsTo(Achat::class, 'achat_id');
    }








}
