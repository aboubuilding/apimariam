<?php

namespace App\Models;

use App\Types\TypeStatus;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Depense extends Model
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


        'reference',
        'beneficaire',
        'telephone_beneficiaire',
        'commentaire',
        'date_depense',
        'annee_id',
        'utilisateur_id',
        'statut_depense',
        'fournisseur_id',
        'categorie_depense_id',
  
       
       

        'etat',

    ];



    /**
     * Ajouter une Depense
     *

     * @param  string $reference
     * @param  string $beneficaire
     * @param  string $telephone_beneficiaire
     * @param  string $commentaire
     * @param  date $date_depense
     * @param  int $annee_id
     * @param  int $utilisateur_id
     * @param  int $statut_depense
     * @param  int $fournisseur_id
     * @param  int $categorie_depense_id

    

     * @return Depense
     */

    public static function addDepense(
        $reference,
        $beneficaire,
        $telephone_beneficiaire,
        $date_depense,
        $annee_id,
        $utilisateur_id,
        $statut_depense,
        $fournisseur_id,
        $categorie_depense_id
       
        
       

    )
    {
        $depense = new Depense();


        $depense->reference = $reference;
        $depense->beneficaire = $beneficaire;
        $depense->telephone_beneficiaire = $telephone_beneficiaire;
        $depense->commentaire = $commentaire;
        $depense->date_depense = $date_depense;
        $depense->annee_id = $annee_id;

        $depense->utilisateur_id = $utilisateur_id;
        $depense->statut_depense = $statut_depense;
        $depense->fournisseur_id = $fournisseur_id;
        $depense->categorie_depense_id = $categorie_depense_id;
       
        $depense->created_at = Carbon::now();

        $depense->save();

        return $depense;
    }

    /**
     * Affichage d'une année scolaire
     * @param int $id
     * @return  Depense
     */

    public static function rechercheDepenseById($id)
    {

        return   $depense= Depense::findOrFail($id);
    }

    /**
     * Update d'une Depense scolaire

   
     * @param  string $reference
     * @param  string $beneficaire
     * @param  string $telephone_beneficiaire
     * @param  string $commentaire
     * @param  date $date_depense
     * @param  int $annee_id
     * @param  int $utilisateur_id
     * @param  int $statut_depense
     * @param  int $fournisseur_id
     * @param  int $categorie_depense_id
    

     * @param int $id
     * @return  Depense
     */

    public static function updateDepense(
          $reference,
        $beneficaire,
        $telephone_beneficiaire,
        $date_depense,
        $annee_id,
        $utilisateur_id,
        $statut_depense,
        $fournisseur_id,
        $categorie_depense_id,
       
       
        $id)
    {


        return   $depense= Depense::findOrFail($id)->update([



            'reference' => $reference,
            'beneficaire' => $beneficaire,
            'telephone_beneficiaire' => $telephone_beneficiaire,
            'commentaire' => $commentaire,
            'date_depense' => $date_depense,
            'annee_id' => $annee_id,

            'utilisateur_id' => $utilisateur_id,
            'statut_depense' => $statut_depense,
            'fournisseur_id' => $fournisseur_id,
            'categorie_depense_id' => $categorie_depense_id,


           
            'id' => $id,


        ]);
    }




    /**
     * Supprimer une Depense
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteDepense($id)
    {

        $depense= Depense::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($depense) {
            return 1;
        }
        return 0;
    }



    /**
     * Retourne la liste des Depenses

     * @param  int $annee_id
     * @param  int $utilisateur_id
     * @param  int $statut_depense
     * @param  int $fournisseur_id
     * @param  int $categorie_depense_id
  
 


     *
     * @return  array
     */

    public static function getListe(

        $annee_id = null,
        $utilisateur_id = null,
        $statut_depense = null,
        $fournisseur_id = null,
        $categorie_depense_id = null,
      


    ) {

      

        $query =  Depense::where('etat', '!=', TypeStatus::SUPPRIME)
        ;

        if ($annee_id != null) {

            $query->where('annee_id', '=', $annee_id);
        }

        


         if ($utilisateur_id != null) {

            $query->where('utilisateur_id', '=', $utilisateur_id);
        }


        if ($statut_depense != null) {

            $query->where('statut_depense', '=', $statut_depense);
        }



         if ($fournisseur_id != null) {

            $query->where('fournisseur_id', '=', $fournisseur_id);
        }


        if ($categorie_depense_id != null) {

            $query->where('categorie_depense_id', '=', $categorie_depense_id);
        }

       


        return    $query->get();
    }



    /**
     * Retourne le nombre  des  activités 


       * @param  int $annee_id
     * @param  int $utilisateur_id
     * @param  int $statut_depense
     * @param  int $fournisseur_id
     * @param  int $categorie_depense_id
  
    

     * @return  int $total
     */

    public static function getTotal(


           $annee_id = null,
        $utilisateur_id = null,
        $statut_depense = null,
        $fournisseur_id = null,
        $categorie_depense_id = null,


    ) {

        $query =   DB::table('depenses')


            ->where('depenses.etat', '!=', TypeStatus::SUPPRIME);


        if ($annee_id != null) {

            $query->where('annee_id', '=', $annee_id);
        }

        


         if ($utilisateur_id != null) {

            $query->where('utilisateur_id', '=', $utilisateur_id);
        }


        if ($statut_depense != null) {

            $query->where('statut_depense', '=', $statut_depense);
        }


         if ($fournisseur_id != null) {

            $query->where('fournisseur_id', '=', $fournisseur_id);
        }


        if ($categorie_depense_id != null) {

            $query->where('categorie_depense_id', '=', $categorie_depense_id);
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
     * Obtenir un utilisateur
     *
     */
    public function utilisateur()
    {


        return $this->belongsTo(Utilisateur::class, 'utilisateur_id');
    }




     /**
     * Obtenir un fournisseur 
     *
     */
    public function fournisseur()
    {


        return $this->belongsTo(Fournisseur::class, 'fournisseur_id');
    }




     /**
     * Obtenir une catégorie  
     *
     */
    public function categorie()
    {


        return $this->belongsTo(CategorieDepense::class, 'categorie_depense_id');
    }


     



  

}
