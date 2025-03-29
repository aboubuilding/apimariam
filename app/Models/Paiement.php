<?php

namespace App\Models;

use App\Types\StatutPaiement;
use App\Types\TypePaiement;
use App\Types\TypeStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Sum;

class Paiement extends Model
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


        'reference',
        'payeur',
        'commentaire',
        'telephone_payeur',
        'date_paiement',
        'statut_paiement',
        'mode_paiement',
        'inscription_id',
        'utilisateur_id',
        'cheque_id',
        'annee_id',
        'type_journal_id',
        'etat',

    ];







    /**
     * Ajouter un paiement
     *

     * @param  string $reference
     * @param  string $payeur
     * @param  string $commentaire
     * @param  string $telephone_payeur
     * @param  date $date_paiement
     * @param  int $statut_paiement
     * @param  int $mode_paiement
     * @param  int $inscription_id
     * @param  int $utilisateur_id
     * @param  int $cheque_id
     * @param  int $annee_id
     * @param  int $type_journal_id






     * @return Paiement
     */

    public static function addPaiement(
        $reference,
        $payeur,
        $commentaire,
        $telephone_payeur,
        $date_paiement,
        $statut_paiement,
        $mode_paiement,
        $inscription_id,
        $utilisateur_id,
        $cheque_id,
        $annee_id,
        $type_journal_id

    ) {
        $paiement = new Paiement();


        $paiement->reference = $reference;
        $paiement->payeur = $payeur;
        $paiement->commentaire = $commentaire;
        $paiement->telephone_payeur = $telephone_payeur;
        $paiement->date_paiement = $date_paiement;
        $paiement->statut_paiement = $statut_paiement;
        $paiement->mode_paiement = $mode_paiement;
        $paiement->inscription_id = $inscription_id;
        $paiement->utilisateur_id = $utilisateur_id;
        $paiement->cheque_id = $cheque_id;
        $paiement->annee_id = $annee_id;
        $paiement->type_journal_id = $type_journal_id;


        $paiement->created_at = Carbon::now();

        $paiement->save();

        return $paiement;
    }

    /**
     * Affichage d'une année scolaire
     *
     *
     * @param int $id
     * @return  Paiement
     */

    public static function recherchePaiementById($id)
    {

        return   $paiement = Paiement::findOrFail($id);
    }

    /**
     * Update d'une paiement scolaire

     * @param  string $reference
     * @param  string $payeur
     * @param  string $commentaire
     * @param  string $telephone_payeur
     * @param  date $date_paiement
     * @param  int $statut_paiement
     * @param  int $mode_paiement
     * @param  int $inscription_id
     * @param  int $utilisateur_id
     * @param  int $cheque_id
     * @param  int $annee_id
     * @param  int $type_journal_id



     * @param int $id
     * @return  Paiement
     */

    public static function updatePaiement(
        $reference,
        $payeur,
        $commentaire,
        $telephone_payeur,
        $date_paiement,
        $statut_paiement,
        $mode_paiement,
        $inscription_id,
        $utilisateur_id,
        $cheque_id,
        $annee_id,
        $type_journal_id,




        $id
    ) {


        return   $paiement = Paiement::findOrFail($id)->update([



            'reference' => $reference,
            'payeur' => $payeur,
            'commentaire' => $commentaire,

            'telephone_payeur' => $telephone_payeur,
            'date_paiement' => $date_paiement,

            'statut_paiement' => $statut_paiement,

            'mode_paiement' => $mode_paiement,
            'inscription_id' => $inscription_id,

            'utilisateur_id' => $utilisateur_id,
            'cheque_id' => $cheque_id,

            'annee_id' => $annee_id,
            'type_journal_id' => $type_journal_id,



            'id' => $id,


        ]);
    }




    /**
     * Supprimer une Paiement
     *
     * @param int $id
     * @return  boolean
     */

    public static function deletePaiement($id)
    {

        $paiement = Paiement::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($paiement) {
            return 1;
        }
        return 0;
    }



    /**
     * Obtenir une annee
     *
     */
    public function annee()
    {


        return $this->belongsTo(Annee::class, 'annee_id');
    }


    /**
     * Obtenir une annee
     *
     */
    public function cheque()
    {


        return $this->belongsTo(Cheque::class, 'cheque_id');
    }

    /**
     * Obtenir une UTILISATEUR
     *
     */
    public function utilisateur()
    {


        return $this->belongsTo(User::class, 'utilisateur_id');
    }

    /**
     * Obtenir une inscription
     *
     */
    public function inscription()
    {


        return $this->belongsTo(Inscription::class, 'inscription_id');
    }


    /**
     * Obtenir un type de journal 
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

        $numero = "MAR-PAI-000";

        $last =  Paiement::orderBy('id', 'DESC')
            ->latest()->first();;

        if ($last) {
            $numero = $numero . $last->id;
        }


        return $numero;
    }




    /**
     * Retourne la liste des  paiements par ...


     * @param  int $annee_id
     * @param  int $utilisateur_id
     * @param  int $inscription_id

     * @param  int $mode_paiement

     * @param  int $statut_paiement
     * @param  int $type_journal_id
   



     * @return  array
     */

    public static function getListe(
        $annee_id,
        $utilisateur_id = null,
        $inscription_id = null,

        $mode_paiement = null,
        $statut_paiement = null,
        $type_journal_id = null,
     

        $date1 = null,
        $date2 = null

    ) {

        $query =  Paiement::where('paiements.etat', '!=', TypeStatus::SUPPRIME)
            ->orderBy('paiements.created_at', 'DESC')
            ->where('paiements.annee_id', '=', $annee_id);

        if ($utilisateur_id != null) {

            $query->where('paiements.utilisateur_id', '=', $utilisateur_id);
        }

        if ($inscription_id != null) {

            $query->where('paiements.inscription_id', '=', $inscription_id);
        }



        if ($mode_paiement != null) {

            $query->where('paiements.mode_paiement', '=', $mode_paiement);
        }

        if ($statut_paiement != null) {

            $query->where('paiements.statut_paiement', '=', $statut_paiement);
        }

         if ($type_journal_id != null) {

            $query->where('paiements.type_journal_id', '=', $type_journal_id);
        }


        if ($date1 != null && $date2 != null) {

            $query->whereBetween('paiements.date_paiement', [$date1, $date2]);
        }


        if ($date1 != null && $date2 == null) {

            $query->where('paiements.date_paiement', '=', $date1);
        }

        if ($date1 == null && $date2 != null) {

            $query->where('paiements.date_paiement', '=', $date2);
        }


        return     $query->get();
    }




    /**
     * Retourne le total  des  paiements par ...


     * @param  int $annee_id
     * @param  int $utilisateur_id
     * @param  int $inscription_id



     * @param  int $mode_paiement

     * @param  int $statut_paiement
     * @param  int $type_journal_id
     * @param  date $date1
     * @param  date $date2



     * @return  int $total
     */

    public static function getTotal(
        $annee_id,
        $utilisateur_id = null,
        $inscription_id = null,

        $mode_paiement = null,
        $statut_paiement = null,
        $date1  = null,
        $date2 = null

    ) {

        $query =   Paiement::where('paiements.etat', '!=', TypeStatus::SUPPRIME)
            ->orderBy('paiements.created_at', 'DESC')
            ->where('paiements.annee_id', '=', $annee_id);



        if ($utilisateur_id != null) {

            $query->where('paiements.utilisateur_id', '=', $utilisateur_id);
        }

        if ($inscription_id != null) {

            $query->where('paiements.inscription_id', '=', $inscription_id);
        }



        if ($mode_paiement != null) {

            $query->where('paiements.mode_paiement', '=', $mode_paiement);
        }

        if ($statut_paiement != null) {

            $query->where('paiements.statut_paiement', '=', $statut_paiement);
        }


         if ($type_journal_id != null) {

            $query->where('paiements.type_journal_id', '=', $type_journal_id);
        }

      

        if ($date1 != null && $date2 != null) {

            $query->whereBetween('paiements.date_paiement', [$date1, $date2]);
        }


        if ($date1 != null && $date2 == null) {

            $query->where('paiements.date_paiement', '=', $date1);
        }

        if ($date1 == null && $date2 != null) {

            $query->where('paiements.date_paiement', '=', $date2);
        }


        $total = $query->count();

        if ($total) {

            return   $total;
        }

        return 0;
    }







}
