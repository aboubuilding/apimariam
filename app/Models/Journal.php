<?php

namespace App\Models;

use App\Types\TypeStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
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


        'caisse_id',
        'annee_id',
        'utilisateur_id',

        'type_journal_id',
        'montant',
        'description',
        'mode_paiement',
        'type_transaction',
        'date_journal',


        'etat',

    ];

      /**
     * Ajouter un Journal


     * @param  int $caisse_id
     * @param  int $annee_id

     * @param  int $utilisateur_id
     * @param  int $type_journal_id

     * @param  string $montant
     * @param  date $description
     * @param  date $mode_paiement
     * @param  date $type_transaction
     * @param  date $date_journal




     * @return Journal
     */

     public static function addJournal(
        $caisse_id,
        $annee_id,

        $utilisateur_id,
        $type_journal_id,
        $montant,
        $description,
        $mode_paiement,
        $type_transaction,
        $date_journal
     

    )
    {
        $journal = new Journal();


        $journal->caisse_id = $caisse_id;
        $journal->annee_id = $annee_id;
        $journal->utilisateur_id = $inscription_id;

        $journal->type_journal_id = $type_journal_id;
        $journal->montant = $montant;
        $journal->description = $description;
        $journal->mode_paiement = $mode_paiement;
        $journal->type_transaction = $type_transaction;
        $journal->date_journal = $date_journal;


        $journal->created_at = Carbon::now();

        $journal->save();

        return $journal;
    }

    /**
     * Affichage d'un Journal
     * @param int $id
     * @return  Journal
     */

    public static function rechercheJournalById($id)
    {

        return   $journal = Journal::findOrFail($id);
    }

    /**
     * Update d'un Journal

      * @param  int $caisse_id
     * @param  int $annee_id

     * @param  int $utilisateur_id
     * @param  int $type_journal_id

     * @param  string $montant
     * @param  date $description
     * @param  date $mode_paiement
     * @param  date $type_transaction
     * @param  date $date_journal




     * @param int $id
     * @return  Journal
     */

    public static function updateJournal(
       $caisse_id,
        $annee_id,

        $utilisateur_id,
        $type_journal_id,
        $montant,
        $description,
        $mode_paiement,
        $type_transaction,
        $date_journal,


        $id)
    {


        return   $journal = Journal::findOrFail($id)->update([



            'caisse_id' => $caisse_id,
            'annee_id' => $annee_id,

            'utilisateur_id' => $utilisateur_id,
            'type_journal_id' => $type_journal_id,
            'montant' => $montant,
            'description' => $description,
            'mode_paiement' => $mode_paiement,
            'type_transaction' => $type_transaction,
            'date_journal' => $date_journal,
          

            'id' => $id,


        ]);
    }




    /**
     * Supprimer une Journal
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteJournal($id)
    {

        $journal = Journal::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($activite) {
            return 1;
        }
        return 0;
    }



    /**
     * Retourne la liste des Journal
     * @param  int $annee_id
     * @param  int $utilisateur_id
     * @param  int $type_journal_id
     * @param  int $mode_paiement
     * @param  int $type_transaction

     *
     * @return  array
     */

    public static function getListe(

        $annee_id = null,

        $utilisateur_id = null,
        $type_journal_id = null,
        $mode_paiement = null,
        $type_transaction = null,
      

    ) {



        $query =  Journal::where('etat', '!=', TypeStatus::SUPPRIME)
        ;

        if ($annee_id != null) {

            $query->where('annee_id', '=', $annee_id);
        }

        if ($utilisateur_id != null) {

            $query->where('utilisateur_id', '=', $utilisateur_id);
        }


         if ($type_journal_id != null) {

            $query->where('type_journal_id', '=', $type_journal_id);
        }

        if ($mode_paiement != null) {

            $query->where('mode_paiement', '=', $mode_paiement);
        }

         if ($type_transaction != null) {

            $query->where('type_transaction', '=', $type_transaction);
        }




        return    $query->get();
    }



    /**
     * Retourne le nombre  des  activités

  * @param  int $annee_id
     * @param  int $utilisateur_id
     * @param  int $type_journal_id
     * @param  int $mode_paiement
     * @param  int $type_transaction

     * @return  int $total
     */

    public static function getTotal(
        $annee_id = null,

        $utilisateur_id = null,
        $type_journal_id = null,
        $mode_paiement = null,
        $type_transaction = null,
      



    ) {

        $query =   DB::table('Journal')


            ->where('Journals.etat', '!=', TypeStatus::SUPPRIME);

 if ($annee_id != null) {

            $query->where('annee_id', '=', $annee_id);
        }

        if ($utilisateur_id != null) {

            $query->where('utilisateur_id', '=', $utilisateur_id);
        }


         if ($type_journal_id != null) {

            $query->where('type_journal_id', '=', $type_journal_id);
        }

        if ($mode_paiement != null) {

            $query->where('mode_paiement', '=', $mode_paiement);
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
     * Obtenir une inscription
     *
     */
    public function typejournal()
    {


        return $this->belongsTo(TypeJournal::class, 'type_journal_id');
    }





}
