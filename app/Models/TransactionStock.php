<?php

namespace App\Models;

use App\Types\TypeStatus;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TransactionStock extends Model
{
    use HasFactory;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->etat = TypeStatus::ACTIF;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [


        'produit_id',
        'annee_id',
        'boutique_id',
        'magasin_id',
        'quantite',
        'commentaire',
        'date_transaction',
        'type_transaction',
        
        'etat',

    ];



    /**
     * Ajouter une TransactionStock
     *

     * @param  int $produit_id
     * @param  int $annee_id
     * @param  int $boutique_id
     * @param  int $magasin_id
     * @param  int $quantite
     * @param  string $commentaire
     * @param  date $date_transaction
     * @param  int $type_transaction
    
     *
     * @return TransactionStock
     */

    public static function addTransactionStock(
        $produit_id,
        $annee_id,
        $boutique_id,
        $magasin_id,
        $quantite,
        $commentaire,
        $date_transaction,
        $type_transaction
       

    ) {
        $transactionstock = new TransactionStock();


        $transactionstock->produit_id = $produit_id;
        $transactionstock->annee_id = $annee_id;
        $transactionstock->boutique_id = $boutique_id;
        $transactionstock->magasin_id = $magasin_id;
        $transactionstock->quantite = $quantite;
        $transactionstock->commentaire = $commentaire;
        $transactionstock->date_transaction = $date_transaction;
        $transactionstock->type_transaction = $type_transaction;
        
        $transactionstock->created_at = Carbon::now();

        $transactionstock->save();

        return $transactionstock;
    }

    /**
     * Affichage d'une année scolaire
     * @param int $id
     * @return  TransactionStock
     */

    public static function rechercheTransactionStockById($id)
    {

        return   $transactionstock = TransactionStock::findOrFail($id);
    }

    /**
     * Update d'une TransactionStock scolaire
     * 
     * 
   * @param  int $produit_id
     * @param  int $annee_id
     * @param  int $boutique_id
     * @param  int $magasin_id
     * @param  int $quantite
     * @param  string $commentaire
     * @param  date $date_transaction
     * @param  int $type_transaction
    
     *
     *
     * @param int $id
     * @return  TransactionStock
     */

    public static function updateTransactionStock(
         $produit_id,
        $annee_id,
        $boutique_id,
        $magasin_id,
        $quantite,
        $commentaire,
        $date_transaction,
        $type_transaction,
       
        $id
    ) {

        return   $transactionstock = TransactionStock::findOrFail($id)->update([

            'produit_id' => $produit_id,
            'annee_id' => $annee_id,
            'boutique_id' => $boutique_id,
            'magasin_id' => $magasin_id,
            'quantite' => $quantite,
            'commentaire' => $commentaire,
            'date_transaction' => $date_transaction,
            'type_transaction' => $type_transaction,
            
            'id' => $id,

        ]);
    }




    /**
     * Supprimer une TransactionStock
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteTransactionStock($id)
    {

        $transactionstock = TransactionStock::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($transactionstock) {
            return 1;
        }
        return 0;
    }



    /**
     * Retourne la liste des années
     * @param  int $produit_id
     * @param  int $annee_id
     * @param  int $boutique_id
     * @param  int $magasin_id
     * @param  int $type_transaction
   
    

     *
     * @return  array
     */

    public static function getListe(

        $produit_id = null,
        $annee_id = null,
        $boutique_id = null,
        $magasin_id = null,
        $type_transaction = null
       
      

    ) {

        $query =  TransactionStock::where('etat', '!=', TypeStatus::SUPPRIME);


        if ($annee_id != null) {

            $query->where('annee_id', '=', $annee_id);
        }



         if ($produit_id != null) {

            $query->where('produit_id', '=', $produit_id);
        }


         if ($boutique_id != null) {

            $query->where('boutique_id', '=', $boutique_id);
        }


         if ($magasin_id != null) {

            $query->where('magasin_id', '=', $magasin_id);
        }

         if ($type_transaction != null) {

            $query->where('type_transaction', '=', $type_transaction);
        }

       

        return    $query->get();
    }



    /**
     * Retourne le nombre  des  années
     *
     * @param  int $produit_id
     * @param  int $annee_id
     * @param  int $boutique_id
     * @param  int $magasin_id
     * @param  int $type_transaction
    
     *
     *
     *
     * @return  int $total
     */

    public static function getTotal(

      $produit_id = null,
        $annee_id = null,
        $boutique_id = null,
        $magasin_id = null,
        $type_transaction = null
       

    ) {

        $query =   DB::table('parent_eleves')

            ->where('parent_eleves.etat', '!=', TypeStatus::SUPPRIME);

       if ($annee_id != null) {

            $query->where('annee_id', '=', $annee_id);
        }



         if ($produit_id != null) {

            $query->where('produit_id', '=', $produit_id);
        }


         if ($boutique_id != null) {

            $query->where('boutique_id', '=', $boutique_id);
        }


         if ($magasin_id != null) {

            $query->where('magasin_id', '=', $magasin_id);
        }

         if ($type_transaction != null) {

            $query->where('type_transaction', '=', $type_transaction);
        }

       

        $total = $query->count();

        if ($total) {

            return   $total;
        }

        return 0;
    }



 



 /**
     * Obtenir un espace 
     *
     */
    public function annee()
    {


        return $this->belongsTo(Annee::class, 'annee_id');
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
     * Obtenir un espace 
     *
     */
    public function boutique()
    {


        return $this->belongsTo(Boutique::class, 'boutique_id');
    }




 /**
     * Obtenir un espace 
     *
     */
    public function magasin()
    {


        return $this->belongsTo(Annee::Magasin, 'magasin_id');
    }




 /**
     * Obtenir un espace 
     *
     */



}
