<?php

namespace App\Models;

use App\Types\TypeStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Produit extends Model
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
        'prix_unitaire',
       
        'photo',
       
        'type_produit_id',



        'etat',

    ];



    /**
     * Ajouter un Produit
     *

     * @param  string $libelle
     * @param  int $prix_unitaire
    
     * @param  string $photo
     
     * @param  int $type_produit_id


     * @return Produit
     */

    public static function addProduit(
        $libelle,
        $prix_unitaire,
       
        $photo,
       
        $type_produit_id
    


    )
    {
        $produit = new Produit();


        $produit->libelle = $libelle;
        $produit->prix_unitaire = $prix_unitaire;
       
        $produit->photo = $photo;
       
        $produit->type_produit_id = $type_produit_id;


        $produit->created_at = Carbon::now();

        $produit->save();

        return $produit;
    }

    /**
     * Affichage d'une  Produit
     * @param int $id
     * @return  Produit
     */

    public static function rechercheProduitById($id)
    {

        return   $produit = Produit::findOrFail($id);
    }

    /**
     * Update d'une Produit

     * @param  string $libelle
     * @param  int $prix_unitaire
    
     * @param  string $photo
    
     * @param  int $type_produit_id




     * @param int $id
     * @return  Produit
     */

    public static function updateProduit(
         $libelle,
        $prix_unitaire,
       
        $photo,
       
        $type_produit_id,



        $id)
    {


        return   $produit = Produit::findOrFail($id)->update([



            'libelle' => $libelle,
            'prix_unitaire' => $prix_unitaire,
           
            
            'photo' => $photo,
            
            'type_produit_id' => $type_produit_id,

            'id' => $id,


        ]);
    }




    /**
     * Supprimer une Produit
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteProduit($id)
    {

        $produit = Produit::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($produit) {
            return 1;
        }
        return 0;
    }






    /**
     * Retourne le nombre de produits    par  annnee ...


 * @param  int $type_produit_id
    
         * @return  array
     */

    public static function getListe(

  $type_produit_id = null,



    ){

        $query =  Produit::

           where('produits.etat', '!=', TypeStatus::SUPPRIME)

        ->orderBy('produits.libelle', 'ASC');

         if ($type_produit_id != null) {

            $query->where('type_produit_id', '=', $type_produit_id);
        }


          return     $query->get();

    }



    /**
     * Retourne la liste  de produits     par  annnee ...





 * @param  int $type_produit_id


     * @return  int $total
     */

    public static function getTotal(

 $type_produit_id = null,

    ){

        $query =  Produit::

           where('produits.etat', '!=', TypeStatus::SUPPRIME)
           ;


             if ($type_produit_id != null) {

            $query->where('type_produit_id', '=', $type_produit_id);
        }




        $total = $query ->count();

        if($total){

            return   $total;
        }

        return 0;

    }






     /**
     * Obtenir un type de produit 
     *
     */
    public function typeproduit()
    {


        return $this->belongsTo(TypeProduit::class, 'type_produit_id');
    }




}
