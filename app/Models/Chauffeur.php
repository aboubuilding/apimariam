<?php

namespace App\Models;

use App\Types\TypeStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
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


        'numero_permis',
        'nom',
        'prenom',

        'telephone',
        'date_naissance',
        'sexe',
        'type_permis',
       


        'etat',

    ];

      /**
     * Ajouter un Chauffeur


     * @param  string $numero_permis
     * @param  string $nom
     * @param  string $prenom
     * @param  string $telephone
     * @param  date $date_naissance
     * @param  int $sexe
     * @param  int $type_permis

    
   

     * @param  int $annee_id



     * @return Chauffeur
     */

     public static function addChauffeur(
        $numero_permis,
        $nom,
        $prenom,
        $telephone,
        $date_naissance,

        $sexe,
        $type_permis,
        $annee_id
        

    )
    {
        $chauffeur = new Chauffeur();


        $chauffeur->numero_permis = $numero_permis;
        $chauffeur->nom = $nom;
        $chauffeur->prenom = $prenom;


        $chauffeur->telephone = $telephone;
        $chauffeur->date_naissance = $date_naissance;
        $chauffeur->sexe = $sexe;
        $chauffeur->type_permis = $type_permis;
        $chauffeur->annee_id = $annee_id;
     

        $chauffeur->created_at = Carbon::now();

        $chauffeur->save();

        return $chauffeur;
    }

    /**
     * Affichage d'un Chauffeur
     * @param int $id
     * @return  Chauffeur
     */

    public static function rechercheChauffeurById($id)
    {

        return   $chauffeur = Chauffeur::findOrFail($id);
    }



    /**
     * Update d'un Chauffeur

     * @param  string $numero_permis
     * @param  string $nom
     * @param  string $prenom
     * @param  string $telephone
     * @param  date $date_naissance
     * @param  int $sexe
     * @param  int $type_permis

    
   

     * @param  int $annee_id



     * @param int $id
     * @return  Chauffeur
     */

    public static function updateChauffeur(
        $numero_permis,
        $nom,
        $prenom,
        $telephone,
        $date_naissance,

        $sexe,
        $type_permis,
        $annee_id
        ,


        $id)
    {


        return   $chauffeur = Chauffeur::findOrFail($id)->update([



            'numero_permis' => $numero_permis,
            'nom' => $nom,
            'prenom' => $prenom,
            'telephone' => $telephone,
            'date_naissance' => $date_naissance,
            'sexe' => $sexe,
            'type_permis' => $type_permis,
            'annee_id' => $annee_id,

            'id' => $id,


        ]);
    }




    /**
     * Supprimer une Chauffeur
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteChauffeur($id)
    {

        $chauffeur = Chauffeur::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($activite) {
            return 1;
        }
        return 0;
    }



    /**
     * Retourne la liste des Chauffeur
     * 
     * 
     * 
     * @param  int $annee_id
     * @param  int $sexe
     * @param  int $type_permis

     *
     * @return  array
     */

    public static function getListe(

        $annee_id = null,

        $sexe = null,
        $type_permis = null

    ) {



        $query =  Chauffeur::where('etat', '!=', TypeStatus::SUPPRIME)
        ;

        if ($annee_id != null) {

            $query->where('annee_id', '=', $annee_id);
        }

        if ($sexe != null) {

            $query->where('sexe', '=', $sexe);
        }


         if ($type_permis != null) {

            $query->where('type_permis', '=', $type_permis);
        }




        return    $query->get();
    }



    /**
     * Retourne le nombre  des  activités


   * @param  int $annee_id
     * @param  int $sexe
     * @param  int $type_permis



     * @return  int $total
     */

    public static function getTotal(
        $annee_id = null,
        $type_permis = null,
        $annee_id = null




    ) {

        $query =   DB::table('chauffeurs')


            ->where('chauffeurs.etat', '!=', TypeStatus::SUPPRIME);


        if ($type_permis != null) {

            $query->where('chauffeurs.type_permis', '=', $type_permis);
        }


        if ($annee_id != null) {

            $query->where('chauffeurs.annee_id', '=', $annee_id);
        }


         if ($sexe != null) {

            $query->where('chauffeurs.sexe', '=', $sexe);
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


   



}
