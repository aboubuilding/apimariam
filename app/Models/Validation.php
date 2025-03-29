<?php

namespace App\Models;

use App\Types\TypeStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validation extends Model
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


        'statut',
        'utilisateur_id',
        'inscription_id',

        'annee_id',
        'commentaire',
        'date_validation',


        'etat',

    ];

      /**
     * Ajouter un Validation


     * @param  int $statut
     * @param  int $utilisateur_id

     * @param  int $inscription_id
     * @param  int $annee_id

     * @param  string $commentaire
     * @param  date $date_validation



     * @return Validation
     */

     public static function addValidation(
        $statut,
        $utilisateur_id,

        $inscription_id,
        $annee_id,
        $commentaire,
        $date_validation

    )
    {
        $validation = new Validation();


        $validation->statut = $statut;
        $validation->utilisateur_id = $utilisateur_id;
        $validation->inscription_id = $inscription_id;

        $validation->annee_id = $annee_id;
        $validation->commentaire = $commentaire;
        $validation->date_validation = $date_validation;


        $validation->created_at = Carbon::now();

        $validation->save();

        return $validation;
    }

    /**
     * Affichage d'un Validation
     * @param int $id
     * @return  Validation
     */

    public static function rechercheValidationById($id)
    {

        return   $validation = Validation::findOrFail($id);
    }

    /**
     * Update d'un Validation

    * @param  int $statut
     * @param  int $utilisateur_id

     * @param  int $inscription_id
     * @param  int $annee_id

     * @param  string $commentaire
     * @param  date $date_validation




     * @param int $id
     * @return  Validation
     */

    public static function updateValidation(
        $statut,
        $utilisateur_id,

        $inscription_id,
        $annee_id,
        $commentaire,
        $date_validation,


        $id)
    {


        return   $validation = Validation::findOrFail($id)->update([



            'statut' => $statut,
            'utilisateur_id' => $utilisateur_id,

            'inscription_id' => $inscription_id,
            'annee_id' => $annee_id,
            'commentaire' => $commentaire,
            'date_validation' => $date_validation,

            'id' => $id,


        ]);
    }




    /**
     * Supprimer une Validation
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteValidation($id)
    {

        $validation = Validation::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($activite) {
            return 1;
        }
        return 0;
    }



    /**
     * Retourne la liste des Validation
     * @param  int $annee_id
     * @param  int $inscription_id
     * @param  int $utilisateur_id
     * @param  int $statut

     *
     * @return  array
     */

    public static function getListe(

        $annee_id = null,

        $inscription_id = null,
        $utilisateur_id = null,
        $statut = null

    ) {



        $query =  Validation::where('etat', '!=', TypeStatus::SUPPRIME)
        ;

        if ($annee_id != null) {

            $query->where('annee_id', '=', $annee_id);
        }

        if ($inscription_id != null) {

            $query->where('inscription_id', '=', $inscription_id);
        }


         if ($utilisateur_id != null) {

            $query->where('utilisateur_id', '=', $utilisateur_id);
        }

        if ($statut != null) {

            $query->where('statut', '=', $statut);
        }




        return    $query->get();
    }



    /**
     * Retourne le nombre  des  activités


     * @param  int $annee_id
     * @param  int $inscription_id
     * @param  int $utilisateur_id
     * @param  int $statut


     * @return  int $total
     */

    public static function getTotal(
        $annee_id = null,

        $inscription_id = null,
        $utilisateur_id = null,
        $statut = null



    ) {

        $query =   DB::table('Validation')


            ->where('Validations.etat', '!=', TypeStatus::SUPPRIME);


         if ($annee_id != null) {

            $query->where('annee_id', '=', $annee_id);
        }

        if ($inscription_id != null) {

            $query->where('inscription_id', '=', $inscription_id);
        }


         if ($utilisateur_id != null) {

            $query->where('utilisateur_id', '=', $utilisateur_id);
        }

        if ($statut != null) {

            $query->where('statut', '=', $statut);
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
     * Obtenir une inscription
     *
     */
    public function inscription()
    {


        return $this->belongsTo(Inscription::class, 'inscription_id');
    }


     /**
     * Obtenir une inscription
     *
     */
    public function utilisateur()
    {


        return $this->belongsTo(Utilisateur::class, 'utilisateur_id');
    }





}
