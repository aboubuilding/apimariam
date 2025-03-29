<?php

namespace App\Models;

use App\Types\TypeStatus;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class EcoleProvenance extends Model
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


        'libelle',
       
        
        'etat',

    ];



    /**
     * Ajouter une EcoleProvenance
     *

     * @param  string $libelle
  
    
     *
     * @return EcoleProvenance
     */

    public static function addEcoleProvenance(
        $libelle
      
       

    ) {
        $ecoleprovenance = new EcoleProvenance();


        $ecoleprovenance->libelle = $libelle;
       
        
        $ecoleprovenance->created_at = Carbon::now();

        $ecoleprovenance->save();

        return $ecoleprovenance;
    }

    /**
     * Affichage d'une année scolaire
     * @param int $id
     * @return  EcoleProvenance
     */

    public static function rechercheEcoleProvenanceById($id)
    {

        return   $ecoleprovenance = EcoleProvenance::findOrFail($id);
    }

    /**
     * Update d'une EcoleProvenance scolaire
     * @param  string $libelle
    
     *
     *
     * @param int $id
     * @return  EcoleProvenance
     */

    public static function updateEcoleProvenance(
        $libelle,
       
       
        $id
    ) {

        return   $ecoleprovenance = EcoleProvenance::findOrFail($id)->update([

            'libelle' => $libelle,
          
            
            'id' => $id,

        ]);
    }




    /**
     * Supprimer une EcoleProvenance
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteEcoleProvenance($id)
    {

        $ecoleprovenance = EcoleProvenance::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($ecoleprovenance) {
            return 1;
        }
        return 0;
    }



    /**
     * Retourne la liste des années
    

     *
     * @return  array
     */

    public static function getListe(

     
      

    ) {

        $query =  EcoleProvenance::where('etat', '!=', TypeStatus::SUPPRIME);


       

       

        return    $query->get();
    }



    /**
     * Retourne le nombre  des  années
     *
  
    
     *
     *
     *
     * @return  int $total
     */

    public static function getTotal(

      
       

    ) {

        $query =   DB::table('parent_eleves')

            ->where('parent_eleves.etat', '!=', TypeStatus::SUPPRIME);

       


       

        $total = $query->count();

        if ($total) {

            return   $total;
        }

        return 0;
    }



 



}
