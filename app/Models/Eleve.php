<?php

namespace App\Models;

use App\Types\TypeStatus;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Eleve extends Model
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


        'matricule',
        'nom',
        'prenom',
        'prenom_usuel',
        'ecole_provenance_id',
        'date_naissance_eleve',
        'lieu_naissance_eleve',
        'sexe',
        'nationalite_id',
        
        'photo',
        'carte_identite',
        'naissance_eleve',
      
        'certificat_medical',
        'parent_id',
        
        'groupe_id',
        'numero_medecin',
        'nom_medecin',
     
        'allergie',



        'etat',

    ];



    /**
     * Ajouter une Eleve
     *

     * @param  string $matricule
     * @param  string $nom
     * @param  string $prenom
     * @param  string $prenom_usuel
     * @param  date $date_naissance
     * @param  string $lieu_naissance
     * @param  int $sexe
     * @param  int $nationalite_id
     * @param  int $ecole_provenance_id
     * @param  string $photo
     * @param  string $carte_identite
     * @param  string $naissance_eleve
     * @param  int $parent_id
     * @param  int $groupe_id
     * @param  string $certificat_medical
     * @param  string $nom_medecin
     * @param  string $numero_medecin
     * @param  string $allergie
   






     * @return Eleve
     */

    public static function addEleve(
        $matricule,
        $nom,
        $prenom,
        $prenom_usuel,
        $date_naissance,
        $lieu_naissance,
        $sexe,
        $nationalite_id,
        $ecole_provenance_id,
        $photo,
        $carte_identite,
        $naissance_eleve,
        $parent_id,
        $groupe_id,
        $certificat_medical,
        $nom_medecin,
        $numero_medecin,
        $allergie
       


    )
    {
        $eleve = new Eleve();


        $eleve->matricule = $matricule;
        $eleve->nom = $nom;
        $eleve->prenom = $prenom;
        $eleve->prenom_usuel = $prenom_usuel;
        $eleve->date_naissance = $date_naissance;
        $eleve->lieu_naissance = $lieu_naissance;
        $eleve->sexe = $sexe;
        $eleve->nationalite_id = $nationalite_id;
        $eleve->ecole_provenance_id = $ecole_provenance_id;
        $eleve->photo = $photo;
        $eleve->carte_identite = $carte_identite;
        $eleve->naissance_eleve = $naissance_eleve;
        $eleve->parent_id = $parent_id;
        $eleve->carte_identite = $carte_identite;
        $eleve->naissance_eleve = $naissance_eleve;
        $eleve->groupe_id = $groupe_id;
        $eleve->certificat_medical = $certificat_medical;
        $eleve->nom_medecin = $nom_medecin;
        $eleve->numero_medecin = $numero_medecin;
        $eleve->allergie = $allergie;
       




        $eleve->created_at = Carbon::now();

        $eleve->save();

        return $eleve;
    }

    /**
     * Affichage d'un eleve
     * @param int $id
     * @return  Eleve
     */

    public static function rechercheEleveById($id)
    {

        return   $eleve = Eleve::findOrFail($id);
    }

    /**
     * Update d'une Eleve scolaire
     *
     *
  * @param  string $matricule
     * @param  string $nom
     * @param  string $prenom
     * @param  string $prenom_usuel
     * @param  date $date_naissance
     * @param  string $lieu_naissance
     * @param  int $sexe
     * @param  int $nationalite_id
     * @param  int $ecole_provenance_id
     * @param  string $photo
     * @param  string $carte_identite
     * @param  string $naissance_eleve
     * @param  int $parent_id
     * @param  int $groupe_id
     * @param  string $certificat_medical
     * @param  string $nom_medecin
     * @param  string $numero_medecin
     * @param  string $allergie
   
     *
 * @param int $id
     * @return  Eleve
     */

    public static function updateEleve(
         $matricule,
        $nom,
        $prenom,
        $prenom_usuel,
        $date_naissance,
        $lieu_naissance,
        $sexe,
        $nationalite_id,
        $ecole_provenance_id,
        $photo,
        $carte_identite,
        $naissance_eleve,
        $parent_id,
        $groupe_id,
        $certificat_medical,
        $nom_medecin,
        $numero_medecin,
        $allergie,

        $id)
    {


        return   $eleve = Eleve::findOrFail($id)->update([



            'matricule' => $matricule,
            'nom' => $nom,
            'prenom' => $prenom,
            'prenom_usuel' => $prenom_usuel,
            'date_naissance' => $date_naissance,
            'lieu_naissance' => $lieu_naissance,
            'sexe' => $sexe,
            'nationalite_id' => $nationalite_id,
            'ecole_provenance_id' => $ecole_provenance_id,
            'photo' => $photo,
            'carte_identite' => $carte_identite,
            'naissance_eleve' => $naissance_eleve,
            'parent_id' => $parent_id,
            'groupe_id' => $groupe_id,
            'certificat_medical' => $certificat_medical,
            'nom_medecin' => $nom_medecin,
            'numero_medecin' => $numero_medecin,
            'allergie' => $allergie,
          


            'id' => $id,


        ]);
    }




    /**
     * Supprimer une Eleve
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteEleve($id)
    {

        $eleve = Eleve::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($eleve) {
            return 1;
        }
        return 0;
    }



     /**
     * Retourne la liste des eleves
     *
     *
     * @param  int $ecole_provenance_id
     * @param  int $groupe_id
     * @param  int $nationalite_id
     * @param  int $sexe
     * @param  int $parent_id

     *
     * @return  array
     */

     public static function getListe(

        $espace_id = null,
        $groupe_id = null,
        $nationalite_id = null,
        $sexe = null,
        $parent_id = null,


    ) {

        $query =  Eleve::where('etat', '!=', TypeStatus::SUPPRIME)
         ;

        if ($ecole_provenance_id != null) {

            $query->where('ecole_provenance_id', '=', $ecole_provenance_id);
        }

        if ($groupe_id != null) {

            $query->where('groupe_id', '=', $groupe_id);
        }

        if ($nationalite_id != null) {

            $query->where('nationalite_id', '=', $nationalite_id);
        }

         if ($sexe != null) {

            $query->where('sexe', '=', $sexe);
        }


         if ($parent_id != null) {

            $query->where('parent_id', '=', $parent_id);
        }




        return    $query->get();
    }



    /**
     * Retourne le nombre  des  années


     * @param  int $ecole_provenance_id
     * @param  int $groupe_id
     * @param  int $nationalite_id
     * @param  int $sexe
     * @param  int $parent_id


     * @return  int $total
     */

    public static function getTotal(

      $espace_id = null,
        $groupe_id = null,
        $nationalite_id = null,
        $sexe = null,
        $parent_id = null,


    ) {

        $query =   DB::table('eleves')


            ->where('eleves.etat', '!=', TypeStatus::SUPPRIME);


          if ($ecole_provenance_id != null) {

            $query->where('ecole_provenance_id', '=', $ecole_provenance_id);
        }

        if ($groupe_id != null) {

            $query->where('groupe_id', '=', $groupe_id);
        }

        if ($nationalite_id != null) {

            $query->where('nationalite_id', '=', $nationalite_id);
        }

         if ($sexe != null) {

            $query->where('sexe', '=', $sexe);
        }


         if ($parent_id != null) {

            $query->where('parent_id', '=', $parent_id);
        }


        $total = $query->count();

        if ($total) {

            return   $total;
        }

        return 0;
    }


   

    /**
     * Obtenir une nationalite
     *
     */
    public function nationalite()
    {


        return $this->belongsTo(Nationalite::class, 'nationalite_id');
    }




 /**
     * Obtenir une nationalite
     *
     */
    public function ecoleprovenance()
    {


        return $this->belongsTo(EcoleProvenance::class, 'ecole_provenance_id');
    }


    /**
     * Génère un numéro matricule unique.
     *
     * @return string
     */
    public static function genererMatricule()
    {
        $prefix = date('Ymd'); // Préfixe basé sur la date actuelle
        $uniqueId = strtoupper(bin2hex(random_bytes(3))); // Génère une chaîne hexadécimale de 6 caractères

        return $prefix . '-' . $uniqueId;
    }


    




}
