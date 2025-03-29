<?php

namespace App\Models;

use App\Types\TypeStatus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Achat extends Model
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
        
        'date_achat',
        'statut',
        'annee_id',
        'nom_acheteur',
        'fournisseur_id',
        'type_journal_id',
      



        'etat',

    ];



    /**
     * Ajouter un achat
     *

     * @param  string $reference
     * @param  date $date_achat

     * @param  int $statut
     * @param  int $annee_id
     * @param  string $nom_acheteur
     * @param  int $fournisseur_id
     * @param  int $type_journal_id
    



     * @return Achat
     */

    public static function addAchat(
        $reference,
        $date_achat,
        $statut,
        $annee_id,
        $nom_acheteur,
        $fournisseur_id,
        $type_journal_id
        

    )
    {
        $achat = new Achat();


        $achat->reference = $reference;
        $achat->date_achat = $date_achat;
        $achat->statut = $statut;
        $achat->annee_id = $annee_id;
        $achat->nom_acheteur = $nom_acheteur;
        $achat->fournisseur_id = $fournisseur_id;
        $achat->type_journal_id = $type_journal_id;
      



        $achat->created_at = Carbon::now();

        $achat->save();

        return $achat;
    }

    /**
     * Affichage d'un achat
     * @param int $id
     * @return  Achat
     */

    public static function rechercheAchatById($id)
    {

        return   $achat = Achat::findOrFail($id);
    }

    /**
     * Update d'un achat

    * @param  string $reference
     * @param  date $date_achat

     * @param  int $statut
     * @param  int $annee_id
     * @param  string $nom_acheteur
     * @param  int $fournisseur_id
     * @param  int $type_journal_id




     * @param int $id
     * @return  Achat
     */

    public static function updateAchat(
        $reference,
        $date_achat,
        $statut,
        $annee_id,
        $nom_acheteur,
        $fournisseur_id,
        $type_journal_id,

        $id)
    {


        return   $achat = Achat::findOrFail($id)->update([



            'reference' => $reference,
            'date_achat' => $date_achat,
            'statut' => $statut,
            'annee_id' => $annee_id,
            'nom_acheteur' => $nom_acheteur,
            'fournisseur_id' => $fournisseur_id,
            'type_journal_id' => $type_journal_id,
          


            'id' => $id,


        ]);
    }




    /**
     * Supprimer une Achat
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteAchat($id)
    {

        $achat = Achat::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($achat) {
            return 1;
        }
        return 0;
    }



    /**
     * Retourne la liste des Achats


     * @param  int $annee_id
     * @param  int $fournisseur_id
     * @param  int $statut
     * @param  int $type_journal_id

     *
     * @return  array
     */

    public static function getListe(

        $annee_id = null,

        $fournisseur_id = null,
        $statut = null,
        $type_journal_id = null


    ) {



        $query =  Achat::where('etat', '!=', TypeStatus::SUPPRIME)
        ;

        if ($annee_id != null) {

            $query->where('annee_id', '=', $annee_id);
        }

        if ($fournisseur_id != null) {

            $query->where('fournisseur_id', '=', $fournisseur_id);
        }



         if ($statut != null) {

            $query->where('statut', '=', $statut);
        }


            if ($type_journal_id != null) {

            $query->where('type_journal_id', '=', $type_journal_id);
        }





        return    $query->get();
    }



    /**
     * Retourne le nombre  des  achats


   * @param  int $annee_id
     * @param  int $fournisseur_id
     * @param  int $statut
     * @param  int $type_journal_id


     * @return  int $total
     */

    public static function getTotal(
         $annee_id = null,

        $fournisseur_id = null,
        $statut = null,
        $type_journal_id = null





    ) {

        $query =   DB::table('achats')


            ->where('achats.etat', '!=', TypeStatus::SUPPRIME);


       if ($annee_id != null) {

            $query->where('annee_id', '=', $annee_id);
        }

        if ($fournisseur_id != null) {

            $query->where('fournisseur_id', '=', $fournisseur_id);
        }



         if ($statut != null) {

            $query->where('statut', '=', $statut);
        }


            if ($type_journal_id != null) {

            $query->where('type_journal_id', '=', $type_journal_id);
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
     * Obtenir un fournisseur
     *
     */
    public function fournisseur()
    {


        return $this->belongsTo(Fournisseur::class, 'fournisseur_id');
    }



    /**
     * Obtenir un fournisseur
     *
     */
    public function typejournal()
    {


        return $this->belongsTo(TypeJournal::class, 'type_journal_id');
    }



     /**
     * Generer le  code de paiement

     * @return  string
     */

     public static function genererNumero()
     {

         $numero = "MAR-ACHT-000";

         $last =  Achat::orderBy('id', 'DESC')
             ->latest()->first();;

         if ($last) {
             $numero = $numero . $last->id;
         }


         return $numero;
     }


}
